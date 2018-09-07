CREATE TABLE articulos (
  idarticulos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  personaje_idpersonaje INTEGER UNSIGNED NOT NULL,
  tipo_articulos_idtipo_articulos INTEGER UNSIGNED NOT NULL,
  nom_articulo VARCHAR NULL,
  precio_articulo_gold INTEGER UNSIGNED NULL,
  precio_articulo_cash INTEGER UNSIGNED NULL,
  PRIMARY KEY(idarticulos),
  INDEX articulos_FKIndex1(tipo_articulos_idtipo_articulos),
  INDEX articulos_FKIndex2(personaje_idpersonaje)
);

CREATE TABLE descripcion_oferta (
  iddescripcion_oferta INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  oferta_usuario_idoferta_usuario INTEGER UNSIGNED NOT NULL,
  det_inventario_usuarios_id_det_inventa_usuario INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(iddescripcion_oferta),
  INDEX descripcion_oferta_FKIndex1(det_inventario_usuarios_id_det_inventa_usuario),
  INDEX descripcion_oferta_FKIndex2(oferta_usuario_idoferta_usuario)
);

CREATE TABLE det_inventario_usuarios (
  id_det_inventa_usuario INTEGER UNSIGNED NOT NULL,
  articulos_idarticulos INTEGER UNSIGNED NOT NULL,
  usuarios_idusuarios INTEGER UNSIGNED NOT NULL,
  gemas_poder_det_inv_usr INTEGER UNSIGNED NULL,
  refinado_det_inv_usr BIT NULL,
  estado_det_inve BIT NULL,
  PRIMARY KEY(id_det_inventa_usuario),
  INDEX det_inventario_usuarios_FKIndex1(usuarios_idusuarios),
  INDEX det_inventario_usuarios_FKIndex2(articulos_idarticulos)
);

CREATE TABLE oferta_usuario (
  idoferta_usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuarios_idusuarios INTEGER UNSIGNED NOT NULL,
  estado_oferta VARCHAR NULL,
  fecha_oferta DATE NULL,
  PRIMARY KEY(idoferta_usuario),
  INDEX oferta_usuario_FKIndex1(usuarios_idusuarios)
);

CREATE TABLE personaje (
  idpersonaje INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  clase_personaje VARCHAR NULL,
  PRIMARY KEY(idpersonaje)
);

CREATE TABLE tipo_articulos (
  idtipo_articulos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nom_tipo_articulo VARCHAR NULL,
  PRIMARY KEY(idtipo_articulos)
);

CREATE TABLE usuarios (
  idusuarios INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nom_usuario VARCHAR(100) NULL,
  ape_usuario VARCHAR(100) NULL,
  cuenta_usuario VARCHAR(100) NULL,
  contraseña_usuario VARCHAR(100)) NULL,
  email_usuario VARCHAR(255)) NULL,
  fecha_nac_usuario DATE NULL,
  PRIMARY KEY(idusuarios)
);


