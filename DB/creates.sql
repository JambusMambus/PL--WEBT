CREATE DATABASE Disco;

USE Disco;

CREATE TABLE Zutrittcodes (
                              code_id INT PRIMARY KEY,
                              passwort VARCHAR(50),
                              datum DATE
);

INSERT INTO Zutrittcodes (code_id, passwort, datum)
VALUES
    (1, 'Shibboleth', '2023-06-05')
