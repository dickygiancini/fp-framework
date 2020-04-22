/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     21-Apr-20 2:20:17 AM                         */
/*==============================================================*/

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             varchar(10) not null,
   ID_TRANSAKSI         varchar(20),
   NAMA_ADMIN           varchar(20) not null,
   USERNAME             varchar(10) not null,
   PASSWORD             varchar(10) not null,
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table: CUSTOMER                                              */
/*==============================================================*/
create table CUSTOMER
(
   ID_CUST              varchar(10) not null,
   EMAIL                varchar(30) not null,
   NAMA                 varchar(50) not null,
   NO_HP                numeric(13,0) not null,
   TGL_LAHIR            date not null,
   PASSWORDCUST         varchar(10) not null,
   primary key (ID_CUST)
);

/*==============================================================*/
/* Table: FILM                                                  */
/*==============================================================*/
create table FILM
(
   KODE_FILM            varchar(20) not null,
   FILM                 varchar(50) not null,
   primary key (KODE_FILM)
);

/*==============================================================*/
/* Table: JADWAL                                                */
/*==============================================================*/
create table JADWAL
(
   ID_JADWAL            varchar(20) not null,
   TANGGAL              date not null,
   JAMTAYANG            time not null,
   primary key (ID_JADWAL)
);

/*==============================================================*/
/* Table: KURSI                                                 */
/*==============================================================*/
create table KURSI
(
   ID_KURSI             varchar(10) not null,
   KODE_STUDIO          varchar(20),
   KURSI                varchar(5) not null,
   primary key (ID_KURSI)
);

/*==============================================================*/
/* Table: STUDIO                                                */
/*==============================================================*/
create table STUDIO
(
   KODE_STUDIO          varchar(20) not null,
   KODE_FILM            varchar(20),
   NAMA_STUDIO          varchar(20) not null,
   primary key (KODE_STUDIO)
);

/*==============================================================*/
/* Table: TIKET                                                 */
/*==============================================================*/
create table TIKET
(
   KODE_TIKET           varchar(20) not null,
   ID_KURSI             varchar(10) not null,
   HARGA                decimal(10) not null,
   `CHECK`              int not null,
   primary key (KODE_TIKET)
);

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRANSAKSI         varchar(20) not null,
   ID_CUST              varchar(10),
   KODE_STUDIO          varchar(20),
   KODE_FILM            varchar(20),
   ID_JADWAL            varchar(20),
   KODE_TIKET           varchar(20),
   TGL_PESAN            datetime not null,
   JUMLAH               int not null,
   TOTAL_HARGA          varchar(10) not null,
   KD_STUDIO            varchar(20) not null,
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
