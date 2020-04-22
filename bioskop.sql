/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     21-Apr-20 2:20:17 AM                         */
/*==============================================================*/


alter table ADMIN 
   drop foreign key FK_ADMIN_RELATIONS_TRANSAKS;

alter table KURSI 
   drop foreign key FK_KURSI_RELATIONS_STUDIO;

alter table STUDIO 
   drop foreign key FK_STUDIO_RELATIONS_FILM;

alter table TIKET 
   drop foreign key FK_TIKET_RELATIONS_KURSI;

alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_STUDIO;

alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_TIKET;

alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_CUSTOMER;

alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_JADWAL;

alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_FILM;


alter table ADMIN 
   drop foreign key FK_ADMIN_RELATIONS_TRANSAKS;

drop table if exists ADMIN;

drop table if exists CUSTOMER;

drop table if exists FILM;

drop table if exists JADWAL;


alter table KURSI 
   drop foreign key FK_KURSI_RELATIONS_STUDIO;

drop table if exists KURSI;


alter table STUDIO 
   drop foreign key FK_STUDIO_RELATIONS_FILM;

drop table if exists STUDIO;


alter table TIKET 
   drop foreign key FK_TIKET_RELATIONS_KURSI;

drop table if exists TIKET;


alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_TIKET;

alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_CUSTOMER;

alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_JADWAL;

alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_FILM;

alter table TRANSAKSI 
   drop foreign key FK_TRANSAKS_RELATIONS_STUDIO;

drop table if exists TRANSAKSI;

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             varchar(10) not null  comment '',
   ID_TRANSAKSI         varchar(20)  comment '',
   NAMA_ADMIN           varchar(20) not null  comment '',
   USERNAME             varchar(10) not null  comment '',
   PASSWORD             varchar(10) not null  comment '',
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table: CUSTOMER                                              */
/*==============================================================*/
create table CUSTOMER
(
   ID_CUST              varchar(10) not null  comment '',
   EMAIL                varchar(30) not null  comment '',
   NAMA                 varchar(50) not null  comment '',
   NO_HP                numeric(13,0) not null  comment '',
   TGL_LAHIR            date not null  comment '',
   PASSWORDCUST         varchar(10) not null  comment '',
   primary key (ID_CUST)
);

/*==============================================================*/
/* Table: FILM                                                  */
/*==============================================================*/
create table FILM
(
   KODE_FILM            varchar(20) not null  comment '',
   FILM                 varchar(50) not null  comment '',
   primary key (KODE_FILM)
);

/*==============================================================*/
/* Table: JADWAL                                                */
/*==============================================================*/
create table JADWAL
(
   ID_JADWAL            varchar(20) not null  comment '',
   TANGGAL              date not null  comment '',
   JAMTAYANG            time not null  comment '',
   primary key (ID_JADWAL)
);

/*==============================================================*/
/* Table: KURSI                                                 */
/*==============================================================*/
create table KURSI
(
   ID_KURSI             varchar(10) not null  comment '',
   KODE_STUDIO          varchar(20)  comment '',
   KURSI                varchar(5) not null  comment '',
   primary key (ID_KURSI)
);

/*==============================================================*/
/* Table: STUDIO                                                */
/*==============================================================*/
create table STUDIO
(
   KODE_STUDIO          varchar(20) not null  comment '',
   KODE_FILM            varchar(20)  comment '',
   NAMA_STUDIO          varchar(20) not null  comment '',
   primary key (KODE_STUDIO)
);

/*==============================================================*/
/* Table: TIKET                                                 */
/*==============================================================*/
create table TIKET
(
   KODE_TIKET           varchar(20) not null  comment '',
   ID_KURSI             varchar(10) not null  comment '',
   HARGA                decimal(10) not null  comment '',
   "CHECK"              int not null  comment '',
   primary key (KODE_TIKET)
);

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRANSAKSI         varchar(20) not null  comment '',
   ID_CUST              varchar(10)  comment '',
   KODE_STUDIO          varchar(20)  comment '',
   KODE_FILM            varchar(20)  comment '',
   ID_JADWAL            varchar(20)  comment '',
   KODE_TIKET           varchar(20)  comment '',
   TGL_PESAN            datetime not null  comment '',
   JUMLAH               int not null  comment '',
   TOTAL_HARGA          varchar(10) not null  comment '',
   KD_STUDIO            varchar(20) not null  comment '',
   primary key (ID_TRANSAKSI)
);

alter table ADMIN add constraint FK_ADMIN_RELATIONS_TRANSAKS foreign key (ID_TRANSAKSI)
      references TRANSAKSI (ID_TRANSAKSI) on delete restrict on update restrict;

alter table KURSI add constraint FK_KURSI_RELATIONS_STUDIO foreign key (KODE_STUDIO)
      references STUDIO (KODE_STUDIO) on delete restrict on update restrict;

alter table STUDIO add constraint FK_STUDIO_RELATIONS_FILM foreign key (KODE_FILM)
      references FILM (KODE_FILM) on delete restrict on update restrict;

alter table TIKET add constraint FK_TIKET_RELATIONS_KURSI foreign key (ID_KURSI)
      references KURSI (ID_KURSI) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_TRANSAKS_RELATIONS_STUDIO foreign key (KODE_STUDIO)
      references STUDIO (KODE_STUDIO) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_TRANSAKS_RELATIONS_TIKET foreign key (KODE_TIKET)
      references TIKET (KODE_TIKET) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_TRANSAKS_RELATIONS_CUSTOMER foreign key (ID_CUST)
      references CUSTOMER (ID_CUST) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_TRANSAKS_RELATIONS_JADWAL foreign key (ID_JADWAL)
      references JADWAL (ID_JADWAL) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_TRANSAKS_RELATIONS_FILM foreign key (KODE_FILM)
      references FILM (KODE_FILM) on delete restrict on update restrict;
