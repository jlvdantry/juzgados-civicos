truncate "public"."perfiles_menus";
INSERT INTO "public"."perfiles_menus" (idperfil,idmenu,mdefault) VALUES ((select id from public.perfiles where descripcion='Administrador de juzgado'),(select id from public.menus where componente='expedientes'),1);
INSERT INTO "public"."perfiles_menus" (idperfil,idmenu,mdefault) VALUES ((select id from public.perfiles where descripcion='Administrador de juzgado'),(select id from public.menus where componente='usuarios-registrados'),0);
INSERT INTO "public"."perfiles_menus" (idperfil,idmenu,mdefault) VALUES ((select id from public.perfiles where descripcion='Juez'),(select id from public.menus where componente='expedientes'),1);
INSERT INTO "public"."perfiles_menus" (idperfil,idmenu,mdefault) VALUES ((select id from public.perfiles where descripcion='Secretario'),(select id from public.menus where componente='expedientes'),1);
INSERT INTO "public"."perfiles_menus" (idperfil,idmenu,mdefault) VALUES ((select id from public.perfiles where descripcion='Consulta'),(select id from public.menus where componente='expedientes'),1);
INSERT INTO "public"."perfiles_menus" (idperfil,idmenu,mdefault) VALUES ((select id from public.perfiles where descripcion='root'),(select id from public.menus where componente='expedientes'),1);
INSERT INTO "public"."perfiles_menus" (idperfil,idmenu,mdefault) VALUES ((select id from public.perfiles where descripcion='root'),(select id from public.menus where componente='usuarios-registrados'),1);
