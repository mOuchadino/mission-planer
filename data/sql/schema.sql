CREATE TABLE company (id BIGINT AUTO_INCREMENT, nom VARCHAR(150) NOT NULL, logo VARCHAR(100), url VARCHAR(255), telephone VARCHAR(20), adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(10) NOT NULL, ville VARCHAR(120) NOT NULL, commentaire VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE contact (id BIGINT AUTO_INCREMENT, nom VARCHAR(150) NOT NULL, prenom VARCHAR(150) NOT NULL, position_id BIGINT NOT NULL, email VARCHAR(255), company_id BIGINT NOT NULL, telephone VARCHAR(20), mobile VARCHAR(20), commentaire VARCHAR(255), rappel TINYINT(1) DEFAULT '1' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX company_id_idx (company_id), INDEX position_id_idx (position_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE job (id BIGINT AUTO_INCREMENT, client_id BIGINT NOT NULL, date_presentation DATETIME, position_id BIGINT NOT NULL, tjm FLOAT(18, 2) NOT NULL, fournisseur_id BIGINT NOT NULL, contact_id BIGINT NOT NULL, statut TINYINT(1) DEFAULT '1' NOT NULL, commentaire VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX fournisseur_id_idx (fournisseur_id), INDEX client_id_idx (client_id), INDEX position_id_idx (position_id), INDEX contact_id_idx (contact_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE position (id BIGINT AUTO_INCREMENT, titre VARCHAR(150) NOT NULL, commentaire VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE contact ADD CONSTRAINT contact_position_id_position_id FOREIGN KEY (position_id) REFERENCES position(id);
ALTER TABLE contact ADD CONSTRAINT contact_company_id_company_id FOREIGN KEY (company_id) REFERENCES company(id);
ALTER TABLE job ADD CONSTRAINT job_position_id_position_id FOREIGN KEY (position_id) REFERENCES position(id);
ALTER TABLE job ADD CONSTRAINT job_fournisseur_id_company_id FOREIGN KEY (fournisseur_id) REFERENCES company(id);
ALTER TABLE job ADD CONSTRAINT job_contact_id_contact_id FOREIGN KEY (contact_id) REFERENCES contact(id);
ALTER TABLE job ADD CONSTRAINT job_client_id_company_id FOREIGN KEY (client_id) REFERENCES company(id);
