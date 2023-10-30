grammar GameLang;

program:    character+;

character:  'PERSONAJE' ID (parameters)? statement* 'FIN';

parameters: 'PARAMETROS' (ID (',' ID)*)?;

timeUnit:   ('SEGUNDOS' | 'MILISEGUNDOS' | 'MINUTOS');

statement
		: whileStatement
		| ifStatement
		| assignment
		| methodCall
		| afterTimer
		| everyTimer
		| consoleStatement;

consoleStatement
		: 'CONSOLA' ((STRING|ID) (',' (STRING|ID))*)?;

whileStatement
        : 'MIENTRAS' logicExpression statement* 'FIN';

ifStatement
        : 'SI' logicExpression statement* ('SINO' statement*)? 'FIN';

assignment
        : (ID | attributeCall) EQUAL (expression | logicExpression);

attributeCall
        : ID '.' ID;

afterTimer
        : 'LUEGO' ('DE')? expression timeUnit statement* 'FIN';

everyTimer
        : 'CADA' expression timeUnit statement* 'FIN';

methodCall
        : ((ID '.')? ID LPAREN (expression (',' expression)*)? RPAREN);

functionDef
        : 'FUNCION' ID '(' (ID (',' ID)*)? ')' statement* 'RETORNAR' (ID)?;

num
        : (MINUS) ? NUMBER;

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
		|   logicExpression AND logicExpression
		|   logicExpression LOR logicExpression
		|   ID EQL expression
		|   ID NEQ expression
		|   ID LST expression
		|   ID LTE expression
		|   ID GRT expression
		|   ID GTE expression;

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
LOR:        'O';
TRUE:       'V';
FALSE:      'F';
NOT:        ('NO' | '!');
EQL:        '==';
NEQ:        '!=';
LST:        '<';
LTE:        '<=';
GRT:        '>';
GTE:        '>=';
WS:         [ \t\r\n]+ -> skip;
COMMENT:    '//' ~[\r\n]* -> skip;
