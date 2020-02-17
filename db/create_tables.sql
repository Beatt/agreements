create table agreement
(
    id                    serial not null constraint agreement_pk primary key,
    nombre                varchar(250) not null,
    sector                varchar(10),
    grado_academico       varchar(250),
    ciclo_academico       varchar(250),
    carrera               varchar(250),
    institucion_educativa varchar(250),
    vigencia              timestamp,
    delegacion            varchar(250),
    tipo_convenio         varchar(250)
);
