grammar GameLang;

program:    character+;

character:  'PERSONAJE' ID (definitions) state* functionDef* 'FIN';

definitions: (parameters | assignment | animationDef | soundDef)* (transition)?;

parameters: 'PARAMETROS' (ID (',' ID)*)?;

state:      'ESTA' ID (entering)? statement* (exiting)? 'FIN';

transition: 'ESTARA' ID;

timeUnit:   ('SEGUNDOS' | 'MILISEGUNDOS' | 'MINUTOS');

statement: whileStatement
		| ifStatement
		| assignment
		| animationDef
		| soundDef
		| methodCall
		| afterTimer
		| everyTimer
		| transition;

whileStatement: 'MIENTRAS' condition statement* 'FIN';

ifStatement: 'SI' condition statement* ('SINO' statement*)?
'FIN';

assignment: (ID | attributeCall) EQUAL expression;

animationDef: 'ANIMACION' (ID | 'ACTUAL') ('REPRODUCIR' | 'DETENER');

soundDef: 'SONIDO' (ID | 'ACTUAL') ('REPRODUCIR' | 'DETENER');

attributeCall : ID '.' ID;

entering: 'ENTRANDO' statement* 'FIN';

exiting: 'SALIENDO' statement* 'FIN';

afterTimer: 'LUEGO' ('DE')?
	expression timeUnit
	statement*
	'FIN';

everyTimer: 'CADA'
	expression timeUnit
	statement*
	'FIN';

methodCall: ((ID '.')? ID LPAREN (expression (',' expression)*)? RPAREN);

functionDef: 'FUNCION' ID '(' (ID (',' ID)*)? ')'
	statement*
	'RETORNAR' (ID)?;

expression:
			INT
		|	STRING
		|	ID
		|	'NULO'
		|	'NULA'
		|	attributeCall
		|	methodCall
		|	expression MULTIPLY expression
		|	expression DIVIDE expression
		|	expression PLUS expression
		|	expression MINUS expression
		|	LPAREN expression RPAREN;

condition: expression ('==' | '!=' | '<' | '<=' | '>' | '>=') expression;

// Lexer rules
ID:         [a-z_][a-z0-9_]*;
STRING:     '"' ~'"'* '"';
INT:        [0-9]+;
PLUS:       '+';
MINUS:      '-';
MULTIPLY:   '*';
DIVIDE:     '/';
LPAREN:     '(';
RPAREN:     ')';
DOT:        '.';
EQUAL:      '=';
WS:         [ \t\r\n]+ -> skip;
