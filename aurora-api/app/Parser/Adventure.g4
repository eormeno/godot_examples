grammar Adventure;

program: statement*;

statement: assignment
         | move_statement
         | take_statement
         | if_statement
         | repeat_statement
         ;

assignment: 'var' ID '=' expression '\n';

move_statement: 'move to' expression '\n';

take_statement: 'take' expression '\n';

statements: (INDENT statement+ DEDENT)?;

if_statement: 'if' expression ':' '\n' statements;

repeat_statement: 'repeat' 'until' expression ':' '\n' statements;

expression: ID
          | STRING
          | NUMBER
          ;

condition: expression;

ID: [a-zA-Z_][a-zA-Z0-9_]*;
STRING: '"' ~[\r\n"]* '"';
NUMBER: '-'? [0-9]+ ('.' [0-9]*)?;

INDENT: '\t'+;
DEDENT: '\n';

WS: [ \r]+ -> skip;