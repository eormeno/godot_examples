grammar GameLang;

program
        : character+ EOF;

character
        : SPRITE ID (parameters)? (statement | functionDef)* END;

parameters
        : 'PARAM' (ID (',' ID)*)?;

timeUnit
        : ('SEG' | 'MIL' | 'MIN');

statement
		: whileStatement
		| ifStatement
		| assignment
		| lineFunctionCall
		| consoleStatement
        | placeStatement
        | moveStatement;

printable
        : STRING
        | NL
        | TB
        | ID;

consoleStatement
		: CONSOLE (printable (printable)*)?;

whileStatement
        : WHILE logicExpression doStatement END;

doStatement
        : DO statement*;

ifStatement
        : IF logicExpression thenStatement (elseStatement)? END;

thenStatement
        : THEN statement*;

elseStatement
        : ELSE statement*;

assignment
        : ID EQUAL expression;

functionCall
        : ID LPAREN (expression (',' expression)*)? RPAREN;

lineFunctionCall
        : DO ID (expression (',' expression)*)?;

functionDef
        : 'FUNC' ID parameters? statement* 'RET' expression;

num
        : (MINUS) ? NUMBER;

expression
		:	ID
		|	NULL
        |   DELTA
        |   functionCall
		|	LPAREN expression RPAREN
		|	expression MULTIPLY expression
		|	expression DIVIDE expression
		|	expression PLUS expression
		|	expression MINUS expression
		|   num
        |   STRING;

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

moveStatement
        : MOVE TO? expression;

placeStatement
        : PLACE AT? expression;

// Lexer rules
ID:         [a-z_][a-z0-9_]*;
NUMBER:     ('0' .. '9') + ('.' ('0' .. '9') +)? ;
STRING:     '"' ~'"'* '"';
DELTA:      'DELTA';
NULL:       ('NULL'|'NULO');
DO:         ('DO'|'HAZ');
IF:         ('IF'|'SI');
THEN:       ('THEN'|'ENTONCES');
ELSE:       ('ELSE'|'SINO');
WHILE:      ('WHILE'|'MIENTRAS');
CONSOLE:    ('CONSOLE'|'CONSOLA'|'ESCRIBE'|'WRITE');
SPRITE:     ('SPRITE'|'PERSONAJE'|'OBJETO'|'OBJECT');
MOVE:       ('MOVE'|'MOVER');
ROTATE:     ('ROTATE'|'ROTAR');
PLACE:      ('PLACE'|'UBICAR');
TO:         ('TO'|'HASTA'|'A');
AT:         ('AT'|'EN');
END:        ('END'|'FIN');
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
