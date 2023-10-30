grammar GameLang;

program:    character+;

// character:  'PERSONAJE' ID (definitions) state* functionDef* 'FIN';

character:  'PERSONAJE' ID (definitions) statement* 'FIN';

definitions: (parameters | assignment | animationDef | soundDef)* (transition)?;

parameters: 'PARAMETROS' (ID (',' ID)*)?;

state:      'ESTA' ID (entering)? statement* (exiting)? 'FIN';

transition: 'ESTARA' ID;

timeUnit:   ('SEGUNDOS' | 'MILISEGUNDOS' | 'MINUTOS');

statement
		: whileStatement
		| ifStatement
		| assignment
		| animationDef
		| soundDef
		| methodCall
		| afterTimer
		| everyTimer
		| transition
		| consoleStatement;

consoleStatement
		: 'CONSOLA' ((STRING|ID) (',' (STRING|ID))*)?;

whileStatement: 'MIENTRAS' logicExpression statement* 'FIN';

ifStatement: 'SI' logicExpression statement* ('SINO' statement*)?
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

num: (MINUS) ? NUMBER;

expression
		:	STRING
		|	ID
		|	'NULO'
		|	'NULA'
		|	attributeCall
		|	methodCall
		|	LPAREN expression RPAREN
		|	expression MULTIPLY expression
		|	expression DIVIDE expression
		|	expression PLUS expression
		|	expression MINUS expression
		|   num;

// condition: expression ('==' | '!=' | '<' | '<=' | '>' | '>=') expression;

logicExpression
		:   TRUE
		|   FALSE
		|   NOT logicExpression
		|   LPAREN logicExpression RPAREN
		|   expression AND expression
		|   expression OR  expression
		|   expression EQUALS expression
		|   expression NOTEQUALS expression
		|   expression LT expression
		|   expression LTE expression
		|   expression GT expression
		|   expression GTE expression;

// Lexer rules
ID:         [a-z_][a-z0-9_]*;
NUMBER:     ('0' .. '9') + ('.' ('0' .. '9') +)? ;
STRING:     '"' ~'"'* '"';
PLUS:       '+';
MINUS:      '-';
MULTIPLY:   '*';
DIVIDE:     '/';
LPAREN:     '(';
RPAREN:     ')';
DOT:        '.';
EQUAL:      '=';
AND:        'Y';
OR:         'O';
TRUE:       'V';
FALSE:      'F';
NOT         'NO';
EQUALS:     '==';
NOTEQUALS:  '!=';
LT:         '<';
LTE:        '<=';
GT:         '>';
GTE:        '>=';
WS:         [ \t\r\n]+ -> skip;
COMMENT:    '//' ~[\r\n]* -> skip;
