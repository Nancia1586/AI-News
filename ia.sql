CREATE TABLE auteur(
    id SERIAL PRIMARY KEY,
    nom varchar(200),
    email varchar(200),
    mdp varchar(50)
);

CREATE TABLE info(
    id SERIAL PRIMARY KEY,
    date date,
    titre varchar(100),
    resume text,
    contenu text,
    image text,
    auteurid int,
    FOREIGN KEY (auteurid) REFERENCES auteur(id)
);

