PGDMP                     
    w            yii-pos    9.6.5    9.6.5 1    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           1262    16393    yii-pos    DATABASE     �   CREATE DATABASE "yii-pos" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Indonesian_Indonesia.1252' LC_CTYPE = 'Indonesian_Indonesia.1252';
    DROP DATABASE "yii-pos";
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12387    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16482    kategori    TABLE     X   CREATE TABLE kategori (
    id integer NOT NULL,
    kategori character varying(100)
);
    DROP TABLE public.kategori;
       public         postgres    false    3            �            1259    16480    kategori_id_seq    SEQUENCE     q   CREATE SEQUENCE kategori_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.kategori_id_seq;
       public       postgres    false    190    3            �           0    0    kategori_id_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE kategori_id_seq OWNED BY kategori.id;
            public       postgres    false    189            �            1259    16471    level    TABLE     @   CREATE TABLE level (
    id integer NOT NULL,
    level text
);
    DROP TABLE public.level;
       public         postgres    false    3            �            1259    16469    level_id_seq    SEQUENCE     n   CREATE SEQUENCE level_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.level_id_seq;
       public       postgres    false    188    3            �           0    0    level_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE level_id_seq OWNED BY level.id;
            public       postgres    false    187            �            1259    16539    order    TABLE     v   CREATE TABLE "order" (
    id integer NOT NULL,
    pelanggan_id smallint,
    user_id smallint,
    total integer
);
    DROP TABLE public."order";
       public         postgres    false    3            �            1259    16537    order_id_seq    SEQUENCE     n   CREATE SEQUENCE order_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.order_id_seq;
       public       postgres    false    3    196            �           0    0    order_id_seq    SEQUENCE OWNED BY     1   ALTER SEQUENCE order_id_seq OWNED BY "order".id;
            public       postgres    false    195            �            1259    16508 	   pelanggan    TABLE     �   CREATE TABLE pelanggan (
    id integer NOT NULL,
    email character varying(100),
    nama character varying(100),
    alamat text,
    mobile character varying(12)
);
    DROP TABLE public.pelanggan;
       public         postgres    false    3            �            1259    16506    pelanggan_id_seq    SEQUENCE     r   CREATE SEQUENCE pelanggan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.pelanggan_id_seq;
       public       postgres    false    3    194            �           0    0    pelanggan_id_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE pelanggan_id_seq OWNED BY pelanggan.id;
            public       postgres    false    193            �            1259    16493    produk    TABLE     �   CREATE TABLE produk (
    id integer NOT NULL,
    nama_produk character varying(100),
    deskripsi text,
    stok character varying(100),
    harga character varying(100),
    kategori_id smallint
);
    DROP TABLE public.produk;
       public         postgres    false    3            �            1259    16491    produk_id_seq    SEQUENCE     o   CREATE SEQUENCE produk_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.produk_id_seq;
       public       postgres    false    192    3            �           0    0    produk_id_seq    SEQUENCE OWNED BY     1   ALTER SEQUENCE produk_id_seq OWNED BY produk.id;
            public       postgres    false    191            �            1259    16429    user    TABLE     �   CREATE TABLE "user" (
    id integer NOT NULL,
    email text,
    username text,
    password text,
    "saltPassword" text,
    level_id smallint
);
    DROP TABLE public."user";
       public         postgres    false    3            �            1259    16427    user_id_seq    SEQUENCE     m   CREATE SEQUENCE user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.user_id_seq;
       public       postgres    false    3    186            �           0    0    user_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE user_id_seq OWNED BY "user".id;
            public       postgres    false    185            �           2604    16485    kategori id    DEFAULT     \   ALTER TABLE ONLY kategori ALTER COLUMN id SET DEFAULT nextval('kategori_id_seq'::regclass);
 :   ALTER TABLE public.kategori ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    189    190    190            �           2604    16474    level id    DEFAULT     V   ALTER TABLE ONLY level ALTER COLUMN id SET DEFAULT nextval('level_id_seq'::regclass);
 7   ALTER TABLE public.level ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    187    188    188            �           2604    16542    order id    DEFAULT     X   ALTER TABLE ONLY "order" ALTER COLUMN id SET DEFAULT nextval('order_id_seq'::regclass);
 9   ALTER TABLE public."order" ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    195    196    196            �           2604    16511    pelanggan id    DEFAULT     ^   ALTER TABLE ONLY pelanggan ALTER COLUMN id SET DEFAULT nextval('pelanggan_id_seq'::regclass);
 ;   ALTER TABLE public.pelanggan ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    194    193    194            �           2604    16496 	   produk id    DEFAULT     X   ALTER TABLE ONLY produk ALTER COLUMN id SET DEFAULT nextval('produk_id_seq'::regclass);
 8   ALTER TABLE public.produk ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    191    192    192            �           2604    16432    user id    DEFAULT     V   ALTER TABLE ONLY "user" ALTER COLUMN id SET DEFAULT nextval('user_id_seq'::regclass);
 8   ALTER TABLE public."user" ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    185    186    186                      0    16482    kategori 
   TABLE DATA               )   COPY kategori (id, kategori) FROM stdin;
    public       postgres    false    190   p.       �           0    0    kategori_id_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('kategori_id_seq', 2, true);
            public       postgres    false    189            }          0    16471    level 
   TABLE DATA               #   COPY level (id, level) FROM stdin;
    public       postgres    false    188   �.       �           0    0    level_id_seq    SEQUENCE SET     3   SELECT pg_catalog.setval('level_id_seq', 6, true);
            public       postgres    false    187            �          0    16539    order 
   TABLE DATA               <   COPY "order" (id, pelanggan_id, user_id, total) FROM stdin;
    public       postgres    false    196   �.       �           0    0    order_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('order_id_seq', 1, false);
            public       postgres    false    195            �          0    16508 	   pelanggan 
   TABLE DATA               =   COPY pelanggan (id, email, nama, alamat, mobile) FROM stdin;
    public       postgres    false    194   �.       �           0    0    pelanggan_id_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('pelanggan_id_seq', 2, true);
            public       postgres    false    193            �          0    16493    produk 
   TABLE DATA               O   COPY produk (id, nama_produk, deskripsi, stok, harga, kategori_id) FROM stdin;
    public       postgres    false    192   �/       �           0    0    produk_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('produk_id_seq', 2, true);
            public       postgres    false    191            {          0    16429    user 
   TABLE DATA               R   COPY "user" (id, email, username, password, "saltPassword", level_id) FROM stdin;
    public       postgres    false    186   �/       �           0    0    user_id_seq    SEQUENCE SET     2   SELECT pg_catalog.setval('user_id_seq', 6, true);
            public       postgres    false    185            �           2606    16490    kategori kategori_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY kategori
    ADD CONSTRAINT kategori_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.kategori DROP CONSTRAINT kategori_pkey;
       public         postgres    false    190    190            �           2606    16479    level level_pkey 
   CONSTRAINT     G   ALTER TABLE ONLY level
    ADD CONSTRAINT level_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.level DROP CONSTRAINT level_pkey;
       public         postgres    false    188    188                       2606    16544    order order_pkey 
   CONSTRAINT     I   ALTER TABLE ONLY "order"
    ADD CONSTRAINT order_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public."order" DROP CONSTRAINT order_pkey;
       public         postgres    false    196    196                       2606    16516    pelanggan pelanggan_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY pelanggan
    ADD CONSTRAINT pelanggan_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.pelanggan DROP CONSTRAINT pelanggan_pkey;
       public         postgres    false    194    194                        2606    16501    produk produk_pkey 
   CONSTRAINT     I   ALTER TABLE ONLY produk
    ADD CONSTRAINT produk_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.produk DROP CONSTRAINT produk_pkey;
       public         postgres    false    192    192            �           2606    16437    user user_pkey 
   CONSTRAINT     G   ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_pkey;
       public         postgres    false    186    186                  x�3��M�N�K��2����+��b���� c(�      }   (   x�3�LL����2��N,�,�2�L.-.��M-����� ��	      �      x������ � �      �   �   x�3�,H�I�KOO�3t(I-.��L�t��MLQ�J�*�����QJ�LT�F&�e*����'���+�*�%&�9,��ML��-��f!�L�,��X
�J���4�<��T�5'?hTv~N&S͹b���� �e7�      �   H   x�3�I�P(M.�����+�M�S �pp�pqqF&f�����R�rS�J�39��
��b���� j�      {   �   x�E��J1��u�0%i�6�� n2I
��¹���t����X��/�����w뻅�&���½�d�<|�����I3�Q�'K��7���?�Y�kڦ��u�r��>|ƱD�@�eF�j��������_W�{?��Z�2칐L�Ʉ����i�f�gEA^m0��ZK)�"�C�     