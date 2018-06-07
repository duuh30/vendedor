# Tabela Frutas
| CAMPOS        |     TIPO      |TAMANHO|NOT NULL|AUTO_INCREMENT  | Primary Key 
| ------------- |:-------------:| -----:|--------:|------:        |  -------------:
| Código_Fruta  | INT           | 10    |SIM      |SIM            |SIM
| Nome_Fruta    | VARCHAR       | 50    |SIM      |               |NÃO
| Preço_Fruta   | DOUBLE        | 10    |NÃO      |               |NÃO
|Quantidade_Fruta|INT          | 10    |SIM       |               |NÃO
| Nome_Tipo       | INT           | 10    |NÃO      |               |NÃO


# Tabela Tipo

| CAMPOS       |    TIPO        | TAMANHO  | NOT NULL |    AUTO_INCREMENT    | PRIMARY KEY
| ------------- |:-------------:| -----:|--------:|------:        |  -------------:
| ID_Tipo       | INT           | 10    | SIM     |      SIM      |SIM          |    
| Nome_Tipo     | VARCHAR       | 50    |NAO      |NÃO            |NÃO          |
| UnidadeMedida | VARCHAR       | 2     |SIM      | NÃO           |NÃO          |
| Peso          | DOUBLE        | 10    |SIM      |NÃO            |NÃO          |



