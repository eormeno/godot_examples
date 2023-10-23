grammar GameLang;

program: character+;

character: 'PERSONAJE' ID (starting)? state+ 'FIN';

starting: 'CONFIGURACION' assignment* 'FIN';

state: 'ESTADO' STRING (('SI' | 'MIENTRAS') condition)? statement+ 'FIN';

transition: 'SIGUIENTE' 'ESTADO' STRING 'SI' (condition | 'EVENTO' STRING );

event: 'EVENTO' STRING;

timing: 'CADA' expression timeUnit
    statement+ 'FIN';

wait: 'ESPERAR' expression timeUnit;

timeUnit: ('SEGUNDOS' | 'MILISEGUNDOS' | 'MINUTOS');

statement: whileStatement
        | ifStatement
        | assignment
        | timing
        | wait
        | methodCall
        | event
        | transition;

whileStatement: 'MIENTRAS' condition statement* 'FIN';

ifStatement: 'SI' condition 'ENTONCES' statement* ('SINO' statement*)?
'FIN';

assignment: (ID | attributeCall) EQUAL expression;

attributeCall : ID '.' ID;

methodCall: (ID '.' ID (expression (',' expression)*)? );

expression:
            INT
        |   STRING
        |   ID
        |   attributeCall
        |   expression PLUS expression
        |   expression MINUS expression
        |   expression MULTIPLY expression
        |   expression DIVIDE expression
        |   LPAREN expression RPAREN;

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
