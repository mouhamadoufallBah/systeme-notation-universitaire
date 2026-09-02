CREATE DATABASE gestion_copies;

CREATE TABLE IF NOT EXISTS copies_examen (
    id SERIAL PRIMARY KEY,
    date_depot TIMESTAMP NOT NULL,
    date_limite TIMESTAMP NOT NULL,
    note_brute DECIMAL(4,2) NOT NULL,
    note_finale DECIMAL(4,2) NOT NULL,
    penalite_appliquee BOOLEAN NOT NULL
);

INSERT INTO copies_examen (date_depot, date_limite, note_brute, note_finale, penalite_appliquee) 
VALUES ('2026-06-01 10:00:00', '2026-06-05 23:59:59', 14.5, 14.5, FALSE);

SELECT * FROM copies_examen;