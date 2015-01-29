Zadatak:
Kreirati MySQL tablicu imena "zaposlenik" (relacija one-to-many) koja sadrži sljedeća polja:
[id, ime, prezime, adresa, grad, email]

Kreirati veznu MySQL tablicu imena "telefon" (relacija many-to-one) koja sadrži sljedeća polja:
[id, zaposlenik_id, telefon]

Napraviti datoteku adresar.php u kojoj ćete prikazati zaposlenike iz tablice "zaposlenici" i to 5 zaposlenika po stranici. Napraviti paginaciju, te pored pojedinog zaposlenika postaviti link "Briši". Klikom na navedeni link briše se odabrani zaposlenik (realizirati koristeći Ajax).

U datoteci adresar.php postaviti link "Dodaj zaposlenika". Klikom na navedeni link otvara se forma za unos novog zaposlenika (realizirati koristeći Ajax). Na ovaj način unijeti 10ak testnih podataka u bazu kako bi pokazali rad paginacije.

Napomena:
Nije potrebno obraćati pažnju na dizajn s obzirom da se isti neće ocjenjivati
