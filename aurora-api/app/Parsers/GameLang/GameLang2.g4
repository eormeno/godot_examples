grammar GameLang;

program: character+;

character: 'PERSONAJE' ID (definitions)? state+ functionDef* 'FIN';

definitions:
    'DEFINE'
        (assignment | animationDef | soundDef)* (transition)?
    'FIN';

state: 'ESTA' ID (entering)? statement* (exiting)? 'FIN';

transition: 'ESTARA' ID;

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
        | afterTimer
        | everyTimer
        | transition;

whileStatement: 'MIENTRAS' condition statement* 'FIN';

ifStatement: 'SI' condition statement* ('SINO' statement*)?
'FIN';

assignment: (ID | attributeCall) EQUAL expression;

animationDef: 'ANIMACION' ID;

soundDef: 'SONIDO' ID;

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

methodCall: ((ID '.')? ID '(' (expression (',' expression)*)? ')') | (ID '=' expression ';' ) ;

functionDef: 'FUNCION' ID '(' (ID (',' ID)*)? ')'
    statement*
    'RETORNAR' (ID)?;

expression:
            INT
        |   STRING
        |   ID
        |   'NULO'
        |   'NULA'
        |   attributeCall
        |   methodCall
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
