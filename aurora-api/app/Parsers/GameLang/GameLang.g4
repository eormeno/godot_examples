grammar GameLang;

options { caseInsensitive = true; }

program: character+;

character: 'personaje' ID (starting)? state+ 'fin';

starting: 'inicio' assignmentStatement* transition 'fin';

state: 'estado' STRING ('si' condition)? statement+ 'fin';

transition: 'siguiente' 'estado' expression;

timing: 'cada' expression timeUnit
    statement+ 'fin';

wait: 'esperar' expression timeUnit;

timeUnit: ('segundos' | 'segundo' | 'milisegundos' | 'milisegundo' | 'minutos' | 'minuto');

statement: whileStatement
        | ifStatement
        | assignmentStatement
        | timing
        | wait
        | methodCall
        | transition;

whileStatement: 'mientras' condition statement* 'fin';

ifStatement: 'si' condition 'entonces' statement* ('sino' statement*)?
'fin';

assignmentStatement: (ID | attributeCall) EQUAL expression;

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
ID: [a-z_][a-z0-9_]*;
STRING: '"' ~'"'* '"';
INT: [0-9]+;
PLUS: '+';
MINUS: '-';
MULTIPLY: '*';
DIVIDE: '/';
LPAREN: '(';
RPAREN: ')';
DOT: '.';
EQUAL: '=';
WS: [ \t\r\n]+ -> skip;
