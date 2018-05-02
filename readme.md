# BookAPI Creation

## Title's of Book
insert into title values(101,'Datastructure');
insert into title values(102,'Maths-3');
insert into title values(103,'Logic-Design');
insert into title values(104,'DBMS');
insert into title values(105,'CommunicationSkill');
insert into title values(106,'Java');

## Publisher's
insert into publisher values(201,'Khanna Publication');        ------- maths
insert into publisher values(202,'Jhon Wiley');				         ------- maths
insert into publisher values(203,'Mcgraw hill');			         ------- maths,Logic design,dbms,communicationskill,java
insert into publisher values(204,'PHI');					             -------logic_design
insert into publisher values(205,'Wiley publication');		     -------logic_design,communicationskill
insert into publisher values(206,'Pearson'); 			             ------data structure,dbms
insert into publisher values(207,'Oxford');				             ------data structure
insert into publisher values(208,'Dreamtexh press');		        -------java


## Edition
insert into edition value(301,'Maths-3',38);
insert into edition value(302,'Maths-3',9);
insert into edition value(303,'Maths-3',8);
insert into edition value(304,'Logic-Design',4);
insert into edition value(305,'Logic-Design',3);
insert into edition value(306,'Logic-Design',7);
insert into edition value(307,'Datastructure',8);
insert into edition value(308,'Datastructure',9);
insert into edition value(309,'DBMS',6);
insert into edition value(310,'DBMS',6);
insert into edition value(311,'CommunicationSkill',3);
insert into edition value(312,'CommunicationSkill',6);
insert into edition value(313,'Java',5);
insert into edition value(314,'Java',6);

## Author's
insert into author values(401,'Grewal');
insert into author values(402,'Kreyszig');
insert into author values(403,'Jain');
insert into author values(404,'RP Jain');
insert into author values(405,'Robert');
insert into author values(406,'J.Bhasker');
insert into author values(407,'Tenenbaum');
insert into author values(408,'Remma Thareja');
insert into author values(409,'Korth');
insert into author values(410,'Narvathe');
insert into author values(411,'Simon');
insert into author values(412,'Herbert');
insert into author values(413,'Herbert Scgildt');
insert into author values(414,'D.T');

## Book's
insert into book values(501,102,201,301,501);
insert into book values(502,102,202,302,502);
insert into book values(503,102,203,303,503);
insert into book values(504,103,203,304,504);
insert into book values(505,103,204,305,505);
insert into book values(506,103,205,306,506);
insert into book values(507,101,206,307,507);
insert into book values(508,101,207,308,508);
insert into book values(509,104,203,309,509);
insert into book values(510,104,206,310,510);
insert into book values(511,105,203,311,511);
insert into book values(512,105,205,312,512);
insert into book values(513,106,203,313,513);
insert into book values(514,106,208,314,514);

## Book Author's
insert into book_author values(601,501,401);
insert into book_author values(602,502,402);
insert into book_author values(603,503,403);
insert into book_author values(604,504,404);
insert into book_author values(605,505,405);
insert into book_author values(606,506,406);
insert into book_author values(607,507,407);
insert into book_author values(608,508,408);
insert into book_author values(609,509,409);
insert into book_author values(610,510,410);
insert into book_author values(611,511,411);
insert into book_author values(612,512,412);
insert into book_author values(613,513,413);
insert into book_author values(614,514,414);
