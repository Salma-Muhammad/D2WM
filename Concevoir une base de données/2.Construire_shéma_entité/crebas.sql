/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 11                       */
/* Created on:     30/01/2020 11:54:10                          */
/*==============================================================*/


if exists(select 1 from sys.sysforeignkey where role='FK_CLASSE_APPARTENI_ELEVE') then
    alter table CLASSE
       delete foreign key FK_CLASSE_APPARTENI_ELEVE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_CLASSE_ATTRIBUER_SALLE_DE') then
    alter table CLASSE
       delete foreign key FK_CLASSE_ATTRIBUER_SALLE_DE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_CLASSE_DEFINIR_MATIERES') then
    alter table CLASSE
       delete foreign key FK_CLASSE_DEFINIR_MATIERES
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_ELEVE_ETUDIER_MATIERES') then
    alter table ELEVE
       delete foreign key FK_ELEVE_ETUDIER_MATIERES
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_MATIERES_ENSEIGNER_PROFESSE') then
    alter table MATIERES
       delete foreign key FK_MATIERES_ENSEIGNER_PROFESSE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='APPARTENIR_FK'
     and t.table_name='CLASSE'
) then
   drop index CLASSE.APPARTENIR_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='DEFINIR_FK'
     and t.table_name='CLASSE'
) then
   drop index CLASSE.DEFINIR_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ATTRIBUER_FK'
     and t.table_name='CLASSE'
) then
   drop index CLASSE.ATTRIBUER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CLASSE_PK'
     and t.table_name='CLASSE'
) then
   drop index CLASSE.CLASSE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='CLASSE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table CLASSE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ETUDIER_FK'
     and t.table_name='ELEVE'
) then
   drop index ELEVE.ETUDIER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ELEVE_PK'
     and t.table_name='ELEVE'
) then
   drop index ELEVE.ELEVE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='ELEVE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table ELEVE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ENSEIGNER_FK'
     and t.table_name='MATIERES'
) then
   drop index MATIERES.ENSEIGNER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='MATIERES_PK'
     and t.table_name='MATIERES'
) then
   drop index MATIERES.MATIERES_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='MATIERES'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table MATIERES
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='PROFESSEUR_PK'
     and t.table_name='PROFESSEUR'
) then
   drop index PROFESSEUR.PROFESSEUR_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='PROFESSEUR'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table PROFESSEUR
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='SALLE_DE_COURS_PK'
     and t.table_name='SALLE_DE_COURS'
) then
   drop index SALLE_DE_COURS.SALLE_DE_COURS_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='SALLE_DE_COURS'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table SALLE_DE_COURS
end if;

/*==============================================================*/
/* Table: CLASSE                                                */
/*==============================================================*/
create table CLASSE 
(
   NOM_CLASSE           varchar(30)                    not null,
   NOM_ELEVE            varchar(20)                    not null,
   NOM_MATIERE          varchar(50)                    not null,
   NUM_SALLE            decimal(2)                     not null,
   NB_HEURES            decimal                        not null,
   constraint PK_CLASSE primary key (NOM_CLASSE)
);

/*==============================================================*/
/* Index: CLASSE_PK                                             */
/*==============================================================*/
create unique index CLASSE_PK on CLASSE (
NOM_CLASSE ASC
);

/*==============================================================*/
/* Index: ATTRIBUER_FK                                          */
/*==============================================================*/
create index ATTRIBUER_FK on CLASSE (
NUM_SALLE ASC
);

/*==============================================================*/
/* Index: DEFINIR_FK                                            */
/*==============================================================*/
create index DEFINIR_FK on CLASSE (
NOM_MATIERE ASC
);

/*==============================================================*/
/* Index: APPARTENIR_FK                                         */
/*==============================================================*/
create index APPARTENIR_FK on CLASSE (
NOM_ELEVE ASC
);

/*==============================================================*/
/* Table: ELEVE                                                 */
/*==============================================================*/
create table ELEVE 
(
   NOM_ELEVE            varchar(20)                    not null,
   NOM_MATIERE          varchar(50)                    not null,
   PRENOM_ELEVE         varchar(20)                    not null,
   NOTES                decimal                        not null,
   constraint PK_ELEVE primary key (NOM_ELEVE)
);

/*==============================================================*/
/* Index: ELEVE_PK                                              */
/*==============================================================*/
create unique index ELEVE_PK on ELEVE (
NOM_ELEVE ASC
);

/*==============================================================*/
/* Index: ETUDIER_FK                                            */
/*==============================================================*/
create index ETUDIER_FK on ELEVE (
NOM_MATIERE ASC
);

/*==============================================================*/
/* Table: MATIERES                                              */
/*==============================================================*/
create table MATIERES 
(
   NOM_MATIERE          varchar(50)                    not null,
   NOM_PROF             varchar(30)                    not null,
   constraint PK_MATIERES primary key (NOM_MATIERE)
);

/*==============================================================*/
/* Index: MATIERES_PK                                           */
/*==============================================================*/
create unique index MATIERES_PK on MATIERES (
NOM_MATIERE ASC
);

/*==============================================================*/
/* Index: ENSEIGNER_FK                                          */
/*==============================================================*/
create index ENSEIGNER_FK on MATIERES (
NOM_PROF ASC
);

/*==============================================================*/
/* Table: PROFESSEUR                                            */
/*==============================================================*/
create table PROFESSEUR 
(
   NOM_PROF             varchar(30)                    not null,
   MATIERE_PROF         varchar(30)                    not null,
   constraint PK_PROFESSEUR primary key (NOM_PROF)
);

/*==============================================================*/
/* Index: PROFESSEUR_PK                                         */
/*==============================================================*/
create unique index PROFESSEUR_PK on PROFESSEUR (
NOM_PROF ASC
);

/*==============================================================*/
/* Table: SALLE_DE_COURS                                        */
/*==============================================================*/
create table SALLE_DE_COURS 
(
   NUM_SALLE            decimal(2)                     not null,
   constraint PK_SALLE_DE_COURS primary key (NUM_SALLE)
);

/*==============================================================*/
/* Index: SALLE_DE_COURS_PK                                     */
/*==============================================================*/
create unique index SALLE_DE_COURS_PK on SALLE_DE_COURS (
NUM_SALLE ASC
);

alter table CLASSE
   add constraint FK_CLASSE_APPARTENI_ELEVE foreign key (NOM_ELEVE)
      references ELEVE (NOM_ELEVE)
      on update restrict
      on delete restrict;

alter table CLASSE
   add constraint FK_CLASSE_ATTRIBUER_SALLE_DE foreign key (NUM_SALLE)
      references SALLE_DE_COURS (NUM_SALLE)
      on update restrict
      on delete restrict;

alter table CLASSE
   add constraint FK_CLASSE_DEFINIR_MATIERES foreign key (NOM_MATIERE)
      references MATIERES (NOM_MATIERE)
      on update restrict
      on delete restrict;

alter table ELEVE
   add constraint FK_ELEVE_ETUDIER_MATIERES foreign key (NOM_MATIERE)
      references MATIERES (NOM_MATIERE)
      on update restrict
      on delete restrict;

alter table MATIERES
   add constraint FK_MATIERES_ENSEIGNER_PROFESSE foreign key (NOM_PROF)
      references PROFESSEUR (NOM_PROF)
      on update restrict
      on delete restrict;

