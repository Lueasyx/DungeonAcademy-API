 CREATE TABLE perguntas (
    id SERIAL PRIMARY KEY,
    sala INTEGER,
    tema VARCHAR(100),
    dificuldade INTEGER,
    descricao TEXT,
    pontuacao INTEGER
);

CREATE TABLE opcoes_resposta (
    id SERIAL PRIMARY KEY,
    pergunta_id INTEGER REFERENCES perguntas(id),
    descricao TEXT,
    correta BOOLEAN
);

