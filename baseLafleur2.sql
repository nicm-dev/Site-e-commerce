-- MySQL dump 9.10
--
-- Host: localhost    Database: baselafleur2
-- ------------------------------------------------------
-- Server version	4.0.18-max-debug

--
-- Table structure for table `categorie`
--

CREATE TABLE categorie (
  cat_code char(3) NOT NULL default '',
  cat_libelle varchar(50) NOT NULL default '',
  PRIMARY KEY  (cat_code)
);

--
-- Dumping data for table `categorie`
--

INSERT INTO categorie VALUES ('bul','Bulbes');
INSERT INTO categorie VALUES ('mas','Plantes � massif');
INSERT INTO categorie VALUES ('ros','Rosiers');

--
-- Table structure for table `clientconnu`
--

CREATE TABLE clientconnu (
  clt_code varchar(5) NOT NULL default '',
  clt_nom varchar(30) NOT NULL default '',
  clt_adresse varchar(50) NOT NULL default '',
  clt_tel varchar(20) NOT NULL default '',
  clt_email varchar(50) NOT NULL default '',
  clt_motPasse varchar(10) NOT NULL default '',
  PRIMARY KEY  (clt_code)
) ;

--
-- Dumping data for table `clientconnu`
--

INSERT INTO clientconnu VALUES ('c0001','Dupont','12, rue haute 75001 Paris','01 05 22 35 97','dupont@wanadoo.fr','aaa');
INSERT INTO clientconnu VALUES ('c0002','Dubois','4, bld d\'Alsace 75002 Paris','01 44 97 62 54','dubois@club-internet.fr','bbb');
INSERT INTO clientconnu VALUES ('c0003','Durand','5, all�e des Ifs 80000 Amiens','03 22 79 64 56','durand@free.fr','ccc');

--
-- Table structure for table `commande`
--

CREATE TABLE commande (
  cde_moment varchar(20) NOT NULL default '',
  cde_client varchar(5) NOT NULL default '',
  cde_date varchar(10) NOT NULL default '0000-00-00',
  PRIMARY KEY  (cde_moment,cde_client)
);

--
-- Dumping data for table `commande`
--

INSERT INTO commande VALUES ('1101461660','c0001','2004-11-26');

--
-- Table structure for table `contenir`
--

CREATE TABLE contenir (
  cde_moment varchar(20) NOT NULL default '',
  cde_client varchar(5) NOT NULL default '',
  produit char(3) NOT NULL default '',
  quantite int(11) NOT NULL default '0',
  PRIMARY KEY  (cde_moment,cde_client,produit)
);

--
-- Dumping data for table `contenir`
--

INSERT INTO contenir VALUES ('1101461660','c0001','b01',1);
INSERT INTO contenir VALUES ('1101461660','c0001','r03',2);

--
-- Table structure for table `produit`
--

CREATE TABLE produit (
  pdt_ref char(3) NOT NULL default '',
  pdt_designation varchar(50) NOT NULL default '',
  pdt_prix decimal(5,2) NOT NULL default '0.00',
  pdt_image varchar(50) NOT NULL default '',
  pdt_categorie char(3) NOT NULL default '',
  PRIMARY KEY  (pdt_ref)
);

--
-- Dumping data for table `produit`
--

INSERT INTO produit VALUES ('b01','3 bulbes de b�gonias',"5.00",'bulbes_begonia','bul');
INSERT INTO produit VALUES ('b02','10 bulbes de dahlias',"12.00",'bulbes_dahlia','bul');
INSERT INTO produit VALUES ('b03','50 gla�euls',"9.00",'bulbes_glaieul','bul');
INSERT INTO produit VALUES ('m01','Lot de 3 marguerites',"5.00",'massif_marguerite','mas');
INSERT INTO produit VALUES ('m02','Pour un bouquet de 6 pens�es',"6.00",'massif_pensee','mas');
INSERT INTO produit VALUES ('m03','M�lange vari� de 10 plantes � massif',"15.00",'massif_melange','mas');
INSERT INTO produit VALUES ('r01','1 pied sp�cial grandes fleurs',"20.00",'rosiers_gdefleur','ros');
INSERT INTO produit VALUES ('r02','Une vari�t� s�lectionn�e pour son parfum',"9.00",'rosiers_parfum','ros');
INSERT INTO produit VALUES ('r03','Rosier arbuste',"8.00",'rosiers_arbuste','ros');

