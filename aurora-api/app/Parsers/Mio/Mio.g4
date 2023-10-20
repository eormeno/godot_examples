grammar Mio;

// Parser rules
program: statement+;

statement: moveStatement
        | takeStatement
        | repeatStatement
        | ifStatement
        | assignmentStatement;

moveStatement: 'mover' 'a' STRING;
takeStatement: 'tomar' STRING;

repeatStatement: 'repetir' expression 'veces' statement* 'fin';

ifStatement: 'si' condition 'entonces' statement* ('sino' statement*)? 'fin';

assignmentStatement: ID '=' expression;

expression: INT
         | STRING
         | ID
         | expression '+' expression
         | expression '-' expression
         | expression '*' expression
         | expression '/' expression
         | '(' expression ')';

condition: expression ('==' | '!=' | '<' | '<=' | '>' | '>=') expression;

// Lexer rules
ID: [a-zA-Z_][a-zA-Z0-9_]*;
STRING: '"' ~'"'* '"';
INT: [0-9]+;
PLUS: '+';
MINUS: '-';
MULTIPLY: '*';
DIVIDE: '/';
LPAREN: '(';
RPAREN: ')';
WS: [ \t\r\n]+ -> skip;
