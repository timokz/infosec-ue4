# infosec-ue4

## Assignment 4 for the university lecture *051061 Information Security* 

Simulating security flaws from the [OWASP Top 10](https://owasp.org/Top10/)

## SQL-Injections

`Structured Query Language (SQL*) Injection is a code injection technique used to modify or retrieve data from SQL databases. By inserting specialized SQL statements into an entry field, an attacker is able to execute commands that allow for the retrieval of data from the database, the destruction of sensitive data, or other manipulative behaviors.`

`With the proper SQL command execution, the unauthorized user is able to spoof the identity of a more privileged user, make themselves or others database administrators, tamper with existing data, modify transactions and balances, and retrieve and/or destroy all server data.`

`In modern computing, SQL injection typically occurs over the Internet by sending malicious SQL queries to an API endpoint provided by a website or service (more on this later). In its most severe form, SQL injection can allow an attacker to gain root access to a machine, giving them complete control.`

https://www.cloudflare.com/learning/security/threats/sql-injection/     
https://owasp.org/www-community/attacks/SQL_Injection

## Preventing Injections

- Validation and Sanitization of user supplied data
- Escaping of all user supplied input
- Applying the Principle of least privilege

### Our Approach

### Alternatives

## Tools used 

 - [myphpadmin](https://www.phpmyadmin.net/) for setting up the database and respective tables
 - [mockaroo](https://mockaroo.com/) to mock data 
 - php and html to provide an interface to the database 

