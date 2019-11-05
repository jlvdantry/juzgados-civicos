truncate "public"."users" RESTART IDENTITY;
INSERT INTO "public"."users" (nombres,email,password,api_token,activo) VALUES ('web','web@hotmail.com','$2y$10$vOSnuUQmNc666dHSRPBfbe37fHavhZHHo.X.koK6dNBWucPc5bLAK','My8sKqAG1ooGgT5AMFK18ZEgl6aYKFhshbuAlJSc8BNelUjKIVIhxkESkmJS',1);
INSERT INTO "public"."users" (nombres,email,password,api_token) VALUES ('nodejs','nodejs@hotmail.com','$2y$10$EgSGrxvdLpc8V2x7R3DQPusxBzy9WvnK1yuGrhoIWe3h0yhHxO8H2','466TXxV9nsg33Hc377KtxpcVLV1eXqlAt8AfZ9eqAM387kCrQ2h9ZqtFE4Ri');
INSERT INTO "public"."users" (nombres,email,password,api_token,activo) VALUES ('Administrador','admon@hotmail.com','$2y$10$FaVhS.ExNOpMSxMvBGuXhOBjD9eT.PeYsRL.t93TZpNIRHdSErBJu','ax3oc7UP2Qy1cFTaWMcG4aHqFLH3N6BwfjyI4bzSF4QanPeMyYYH2PwUtUZG',1);
