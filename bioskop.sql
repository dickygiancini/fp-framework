/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     4/21/2020 1:12:35 AM                         */
/*==============================================================*/



/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             varchar(10) not null  comment '',
   ID_TRANSAKSI         varchar(20)  comment '',
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
   JADWAL               datetime not null  comment '',
   primary key (ID_JADWAL)
);

/*==============================================================*/
/* Table: KURSI                                                 */
/*==============================================================*/
create table KURSI
(
   ID_KURSI             varchar(10) not null  comment '',
   KURSI                varchar(5) not null  comment '',
   primary key (ID_KURSI)
);

/*==============================================================*/
/* Table: TIKET                                                 */
/*==============================================================*/
create table TIKET
(
   KODE_TIKET           varchar(20) not null  comment '',
   ID_KURSI             varchar(10) not null  comment '',
   HARGA                decimal(10) not null  comment '',
   primary key (KODE_TIKET)
);

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRANSAKSI         varchar(20) not null  comment '',
   ID_CUST              varchar(10)  comment '',
   KODE_FILM            varchar(20)  comment '',
   ID_JADWAL            varchar(20)  comment '',
   KODE_TIKET           varchar(20)  comment '',
   TGL_PESAN            datetime not null  comment '',
   JUMLAH               int not null  comment '',
   TOTAL_HARGA          varchar(10) not null  comment '',
   primary key (ID_TRANSAKSI)
);

alter table ADMIN add constraint FK_ADMIN_RELATIONS_TRANSAKS foreign key (ID_TRANSAKSI)
      references TRANSAKSI (ID_TRANSAKSI) on delete restrict on update restrict;

alter table TIKET add constraint FK_TIKET_RELATIONS_KURSI foreign key (ID_KURSI)
      references KURSI (ID_KURSI) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_TRANSAKS_RELATIONS_TIKET foreign key (KODE_TIKET)
      references TIKET (KODE_TIKET) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_TRANSAKS_RELATIONS_CUSTOMER foreign key (ID_CUST)
      references CUSTOMER (ID_CUST) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_TRANSAKS_RELATIONS_JADWAL foreign key (ID_JADWAL)
      references JADWAL (ID_JADWAL) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_TRANSAKS_RELATIONS_FILM foreign key (KODE_FILM)
      references FILM (KODE_FILM) on delete restrict on update restrict;

