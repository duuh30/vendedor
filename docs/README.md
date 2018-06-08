# Tabela Frutas
| CAMPOS        |     TIPO      |TAMANHO|NOT NULL|AUTO_INCREMENT  | Primary Key 
| ------------- |:-------------:| -----:|--------:|------:        |  -------------:
| Código_Fruta  | INT           | 10    |SIM      |SIM            |SIM
| Nome_Fruta    | VARCHAR       | 50    |SIM      |   NÃO         |NÃO
| Preço_Fruta   | DOUBLE        | 10    |NÃO      |   NÃO         |NÃO
|Quantidade_Fruta|INT           |10    |SIM       | NÃO           |NÃO
| Nome_Tipo       | INT         | 10    |SIM      |  NÃO          |NÃO
| Unidade_Medida  | VARCHAR      | 55    |SIM      |NÃO            |NÃO


# Tabela Tipo

| CAMPOS       |    TIPO        | TAMANHO  | NOT NULL |    AUTO_INCREMENT    | PRIMARY KEY
| ------------- |:-------------:| -----:|--------:|------:        |  -------------:
| ID_Tipo       | INT           | 10    | SIM     |      NÃO     |NÃO          |    
| Nome_Tipo     | VARCHAR       | 50    |NAO      |NÃO            |NÃO          |


# Tabela Unidade de Medida

| CAMPOS        |     TIPO      |TAMANHO|NOT NULL|AUTO_INCREMENT  | Primary Key 
| ------------- |:-------------:| -----:|--------:|------:        |  -------------:
| Grandeza  | INT           | 10    |SIM      |SIM            |SIM
| Nome_unidade    | VARCHAR       | 50    |SIM      |   NÃO         |NÃO
| Simbolo       | VARCHAR       | 50    | sim     | NÃO            | NÃO



