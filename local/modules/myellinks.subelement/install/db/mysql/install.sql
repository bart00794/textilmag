create table if not exists b_myellinks_subelement_interface(
	ID int(18) not null auto_increment,
	IBLOCK_ID int(18) not null,
	TAB_IBLOCK_ID int(18) not null,
	TAB_CODE_PROP int(18) not null,
	NAME varchar(255) not null,
	ACTIVE char(1) not null default 'Y',
	SORT int(18) not null default 500,
	primary key (ID)
);
