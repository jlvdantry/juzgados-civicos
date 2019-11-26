truncate "public"."perfiles" RESTART IDENTITY;
INSERT INTO "public"."perfiles" (id,descripcion) VALUES (0,'Sin perfil');
INSERT INTO "public"."perfiles" (descripcion) VALUES ('Juez');
INSERT INTO "public"."perfiles" (descripcion) VALUES ('Administrador de juzgado');
INSERT INTO "public"."perfiles" (descripcion) VALUES ('Secretario');
INSERT INTO "public"."perfiles" (descripcion) VALUES ('root');
INSERT INTO "public"."perfiles" (descripcion) VALUES ('Consulta');
