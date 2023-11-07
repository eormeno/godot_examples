grammar GameLang;

program
        : character+ EOF;

character
        : 'PERSONAJE' ID (parameters)? (statement | functionDef)* 'FIN';

parameters
        : 'PARAM' (ID (',' ID)*)?;

timeUnit
        : ('SEG' | 'MIL' | 'MIN');

statement
		: whileStatement
		| ifStatement
		| assignment
		| lineFunctionCall
		| afterTimer
		| everyTimer
		| consoleStatement;

printable
        : STRING
        | NL
        | TB
        | ID;

consoleStatement
		: 'CONSOLA' (printable (printable)*)?;

whileStatement
        : 'MIENTRAS' logicExpression doStatement 'FIN';

doStatement
        : 'HAZ' statement*;

ifStatement
        : 'SI' logicExpression thenStatement (elseStatement)? 'FIN';

thenStatement
        : 'ENTONCES' statement*;

elseStatement
        : 'SINO' statement*;

assignment
        : ID EQUAL (expression | logicExpression);

afterTimer
        : 'LUEGO' ('DE')? expression timeUnit statement* 'FIN';

everyTimer
        : 'CADA' expression timeUnit statement* 'FIN';

functionCall
        : ID LPAREN (expression (',' expression)*)? RPAREN;

lineFunctionCall
        : 'DO' ID (expression (',' expression)*)?;

functionDef
        : 'FUNC' ID parameters? statement* 'RET' expression;

num
        : (MINUS) ? NUMBER;

expression
		:	STRING
		|	ID
		|	NULL
        |   DELTA
		|	functionCall
		|	LPAREN expression RPAREN
		|	expression MULTIPLY expression
		|	expression DIVIDE expression
		|	expression PLUS expression
		|	expression MINUS expression
		|   num;

logicExpression
		:   TRUE
		|   FALSE
        |   ID
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
DELTA:      'DELTA';
NULL:       'NULO';
NL:         'NL';
TB:         'TB';
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
NOT:        'NO';
EQL:        '==';
NEQ:        '!=';
LST:        '<';
LTE:        '<=';
GRT:        '>';
GTE:        '>=';
WS:         [ \t\r\n]+ -> skip;
COMMENT:    '//' ~[\r\n]* -> skip;
