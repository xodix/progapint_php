--@block 1
CREATE TABLE Uczniowie (
	Imie TEXT,
	Nazwisko TEXT,
	Klasa TEXT,
	SREDNIA FLOAT,
	Orzeczenie BOOLEAN
);
--@block 2
INSERT INTO uczniowie (Imie, Nazwisko, Klasa, SREDNIA, Orzeczenie)
VALUES ('Jan', 'Kowalski', '1A', 2, true);