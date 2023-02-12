--
-- PostgreSQL database dump
--

-- Dumped from database version 13.4 (Debian 13.4-4.pgdg110+1)
-- Dumped by pg_dump version 13.4 (Ubuntu 13.4-1.pgdg20.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: campanias; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.campanias (
    id bigint NOT NULL,
    nombre_campania character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    meta_donaciones bigint NOT NULL,
    actual_donado bigint,
    imagen_campania character varying(255),
    id_fundacion bigint NOT NULL
);


ALTER TABLE public.campanias OWNER TO postgres;

--
-- Name: campanias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.campanias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.campanias_id_seq OWNER TO postgres;

--
-- Name: campanias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.campanias_id_seq OWNED BY public.campanias.id;


--
-- Name: categories; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.categories (
    id integer NOT NULL,
    parent_id integer,
    "order" integer DEFAULT 1 NOT NULL,
    name character varying(255) NOT NULL,
    slug character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.categories OWNER TO postgres;

--
-- Name: categories_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.categories_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.categories_id_seq OWNER TO postgres;

--
-- Name: categories_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.categories_id_seq OWNED BY public.categories.id;


--
-- Name: certifica; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.certifica (
    id_fundacion bigint NOT NULL,
    id_user bigint NOT NULL
);


ALTER TABLE public.certifica OWNER TO postgres;

--
-- Name: certificados; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.certificados (
    certificados bigint NOT NULL,
    id_fundacion bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    identificacion character varying(255) NOT NULL,
    fecha character varying(255) NOT NULL,
    monto character varying(255) NOT NULL,
    documento character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.certificados OWNER TO postgres;

--
-- Name: certificados_certificados_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.certificados_certificados_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.certificados_certificados_seq OWNER TO postgres;

--
-- Name: certificados_certificados_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.certificados_certificados_seq OWNED BY public.certificados.certificados;


--
-- Name: color; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.color (
    color bigint NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.color OWNER TO postgres;

--
-- Name: color_color_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.color_color_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.color_color_seq OWNER TO postgres;

--
-- Name: color_color_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.color_color_seq OWNED BY public.color.color;


--
-- Name: data_rows; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.data_rows (
    id integer NOT NULL,
    data_type_id integer NOT NULL,
    field character varying(255) NOT NULL,
    type character varying(255) NOT NULL,
    display_name character varying(255) NOT NULL,
    required boolean DEFAULT false NOT NULL,
    browse boolean DEFAULT true NOT NULL,
    read boolean DEFAULT true NOT NULL,
    edit boolean DEFAULT true NOT NULL,
    add boolean DEFAULT true NOT NULL,
    delete boolean DEFAULT true NOT NULL,
    details text,
    "order" integer DEFAULT 1 NOT NULL
);


ALTER TABLE public.data_rows OWNER TO postgres;

--
-- Name: data_rows_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.data_rows_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.data_rows_id_seq OWNER TO postgres;

--
-- Name: data_rows_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.data_rows_id_seq OWNED BY public.data_rows.id;


--
-- Name: data_types; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.data_types (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    slug character varying(255) NOT NULL,
    display_name_singular character varying(255) NOT NULL,
    display_name_plural character varying(255) NOT NULL,
    icon character varying(255),
    model_name character varying(255),
    description character varying(255),
    generate_permissions boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    server_side smallint DEFAULT '0'::smallint NOT NULL,
    controller character varying(255),
    policy_name character varying(255),
    details text
);


ALTER TABLE public.data_types OWNER TO postgres;

--
-- Name: data_types_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.data_types_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.data_types_id_seq OWNER TO postgres;

--
-- Name: data_types_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.data_types_id_seq OWNED BY public.data_types.id;


--
-- Name: especie; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.especie (
    especie bigint NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.especie OWNER TO postgres;

--
-- Name: especie_especie_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.especie_especie_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.especie_especie_seq OWNER TO postgres;

--
-- Name: especie_especie_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.especie_especie_seq OWNED BY public.especie.especie;


--
-- Name: estado; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.estado (
    estado bigint NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.estado OWNER TO postgres;

--
-- Name: estado_estado_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.estado_estado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estado_estado_seq OWNER TO postgres;

--
-- Name: estado_estado_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.estado_estado_seq OWNED BY public.estado.estado;


--
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO postgres;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO postgres;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- Name: fundaciones; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.fundaciones (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    logo character varying(255) NOT NULL
);


ALTER TABLE public.fundaciones OWNER TO postgres;

--
-- Name: fundaciones_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.fundaciones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.fundaciones_id_seq OWNER TO postgres;

--
-- Name: fundaciones_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.fundaciones_id_seq OWNED BY public.fundaciones.id;


--
-- Name: mascotas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.mascotas (
    id bigint NOT NULL,
    nombre_mascota character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    raza bigint NOT NULL,
    color bigint NOT NULL,
    estado bigint NOT NULL,
    tamanio integer NOT NULL,
    especie bigint NOT NULL,
    edad integer NOT NULL,
    imagen_mascota character varying(255) NOT NULL,
    id_fundacion bigint NOT NULL
);


ALTER TABLE public.mascotas OWNER TO postgres;

--
-- Name: mascotas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.mascotas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mascotas_id_seq OWNER TO postgres;

--
-- Name: mascotas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.mascotas_id_seq OWNED BY public.mascotas.id;


--
-- Name: mascotas_perdidas; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.mascotas_perdidas (
    id bigint NOT NULL,
    nombre_mascota character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    raza bigint,
    color bigint NOT NULL,
    estado bigint NOT NULL,
    tamanio integer NOT NULL,
    imagen_mascota character varying(255) NOT NULL,
    especie bigint NOT NULL,
    id_user bigint NOT NULL
);


ALTER TABLE public.mascotas_perdidas OWNER TO postgres;

--
-- Name: mascotas_perdidas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.mascotas_perdidas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mascotas_perdidas_id_seq OWNER TO postgres;

--
-- Name: mascotas_perdidas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.mascotas_perdidas_id_seq OWNED BY public.mascotas_perdidas.id;


--
-- Name: menu_items; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.menu_items (
    id integer NOT NULL,
    menu_id integer,
    title character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    target character varying(255) DEFAULT '_self'::character varying NOT NULL,
    icon_class character varying(255),
    color character varying(255),
    parent_id integer,
    "order" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    route character varying(255),
    parameters text
);


ALTER TABLE public.menu_items OWNER TO postgres;

--
-- Name: menu_items_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.menu_items_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.menu_items_id_seq OWNER TO postgres;

--
-- Name: menu_items_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.menu_items_id_seq OWNED BY public.menu_items.id;


--
-- Name: menus; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.menus (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.menus OWNER TO postgres;

--
-- Name: menus_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.menus_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.menus_id_seq OWNER TO postgres;

--
-- Name: menus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.menus_id_seq OWNED BY public.menus.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: pages; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pages (
    id integer NOT NULL,
    author_id integer NOT NULL,
    title character varying(255) NOT NULL,
    excerpt text,
    body text,
    image character varying(255),
    slug character varying(255) NOT NULL,
    meta_description text,
    meta_keywords text,
    status character varying(255) DEFAULT 'INACTIVE'::character varying NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT pages_status_check CHECK (((status)::text = ANY (ARRAY[('ACTIVE'::character varying)::text, ('INACTIVE'::character varying)::text])))
);


ALTER TABLE public.pages OWNER TO postgres;

--
-- Name: pages_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.pages_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pages_id_seq OWNER TO postgres;

--
-- Name: pages_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.pages_id_seq OWNED BY public.pages.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- Name: permission_role; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.permission_role (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);


ALTER TABLE public.permission_role OWNER TO postgres;

--
-- Name: permissions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.permissions (
    id bigint NOT NULL,
    key character varying(255) NOT NULL,
    table_name character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.permissions OWNER TO postgres;

--
-- Name: permissions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.permissions_id_seq OWNER TO postgres;

--
-- Name: permissions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;


--
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO postgres;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personal_access_tokens_id_seq OWNER TO postgres;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- Name: posts; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.posts (
    id integer NOT NULL,
    author_id integer NOT NULL,
    category_id integer,
    title character varying(255) NOT NULL,
    seo_title character varying(255),
    excerpt text,
    body text NOT NULL,
    image character varying(255),
    slug character varying(255) NOT NULL,
    meta_description text,
    meta_keywords text,
    status character varying(255) DEFAULT 'DRAFT'::character varying NOT NULL,
    featured boolean DEFAULT false NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT posts_status_check CHECK (((status)::text = ANY (ARRAY[('PUBLISHED'::character varying)::text, ('DRAFT'::character varying)::text, ('PENDING'::character varying)::text])))
);


ALTER TABLE public.posts OWNER TO postgres;

--
-- Name: posts_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.posts_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.posts_id_seq OWNER TO postgres;

--
-- Name: posts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.posts_id_seq OWNED BY public.posts.id;


--
-- Name: raza; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.raza (
    raza bigint NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    especie bigint
);


ALTER TABLE public.raza OWNER TO postgres;

--
-- Name: raza_raza_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.raza_raza_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.raza_raza_seq OWNER TO postgres;

--
-- Name: raza_raza_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.raza_raza_seq OWNED BY public.raza.raza;


--
-- Name: roles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    display_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.roles OWNER TO postgres;

--
-- Name: roles_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.roles_id_seq OWNER TO postgres;

--
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;


--
-- Name: servicios; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.servicios (
    id bigint NOT NULL,
    nombre_serviciio character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    imagen_servicio character varying(255) NOT NULL,
    id_fundacion bigint NOT NULL
);


ALTER TABLE public.servicios OWNER TO postgres;

--
-- Name: servicios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.servicios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.servicios_id_seq OWNER TO postgres;

--
-- Name: servicios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.servicios_id_seq OWNED BY public.servicios.id;


--
-- Name: servicios_prestados; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.servicios_prestados (
    id bigint NOT NULL,
    nombre_servicio character varying(255) NOT NULL,
    id_cliente bigint NOT NULL,
    fecha date NOT NULL,
    descripcion character varying(255),
    id_fundacion bigint NOT NULL,
    nombre_cliente character varying NOT NULL
);


ALTER TABLE public.servicios_prestados OWNER TO postgres;

--
-- Name: servicios_prestados_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.servicios_prestados_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.servicios_prestados_id_seq OWNER TO postgres;

--
-- Name: servicios_prestados_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.servicios_prestados_id_seq OWNED BY public.servicios_prestados.id;


--
-- Name: settings; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.settings (
    id integer NOT NULL,
    key character varying(255) NOT NULL,
    display_name character varying(255) NOT NULL,
    value text,
    details text,
    type character varying(255) NOT NULL,
    "order" integer DEFAULT 1 NOT NULL,
    "group" character varying(255)
);


ALTER TABLE public.settings OWNER TO postgres;

--
-- Name: settings_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.settings_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.settings_id_seq OWNER TO postgres;

--
-- Name: settings_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.settings_id_seq OWNED BY public.settings.id;


--
-- Name: translations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.translations (
    id integer NOT NULL,
    table_name character varying(255) NOT NULL,
    column_name character varying(255) NOT NULL,
    foreign_key integer NOT NULL,
    locale character varying(255) NOT NULL,
    value text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.translations OWNER TO postgres;

--
-- Name: translations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.translations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.translations_id_seq OWNER TO postgres;

--
-- Name: translations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.translations_id_seq OWNED BY public.translations.id;


--
-- Name: user_roles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.user_roles (
    user_id bigint NOT NULL,
    role_id bigint NOT NULL
);


ALTER TABLE public.user_roles OWNER TO postgres;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255),
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    avatar character varying(255) DEFAULT 'users/default.png'::character varying,
    role_id bigint,
    settings text,
    external_id character varying(255),
    external_auth character varying(255),
    id_fundacion bigint
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: campanias id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.campanias ALTER COLUMN id SET DEFAULT nextval('public.campanias_id_seq'::regclass);


--
-- Name: categories id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categories ALTER COLUMN id SET DEFAULT nextval('public.categories_id_seq'::regclass);


--
-- Name: certificados certificados; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.certificados ALTER COLUMN certificados SET DEFAULT nextval('public.certificados_certificados_seq'::regclass);


--
-- Name: color color; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.color ALTER COLUMN color SET DEFAULT nextval('public.color_color_seq'::regclass);


--
-- Name: data_rows id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_rows ALTER COLUMN id SET DEFAULT nextval('public.data_rows_id_seq'::regclass);


--
-- Name: data_types id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_types ALTER COLUMN id SET DEFAULT nextval('public.data_types_id_seq'::regclass);


--
-- Name: especie especie; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.especie ALTER COLUMN especie SET DEFAULT nextval('public.especie_especie_seq'::regclass);


--
-- Name: estado estado; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.estado ALTER COLUMN estado SET DEFAULT nextval('public.estado_estado_seq'::regclass);


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- Name: fundaciones id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.fundaciones ALTER COLUMN id SET DEFAULT nextval('public.fundaciones_id_seq'::regclass);


--
-- Name: mascotas id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas ALTER COLUMN id SET DEFAULT nextval('public.mascotas_id_seq'::regclass);


--
-- Name: mascotas_perdidas id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas_perdidas ALTER COLUMN id SET DEFAULT nextval('public.mascotas_perdidas_id_seq'::regclass);


--
-- Name: menu_items id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menu_items ALTER COLUMN id SET DEFAULT nextval('public.menu_items_id_seq'::regclass);


--
-- Name: menus id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menus ALTER COLUMN id SET DEFAULT nextval('public.menus_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: pages id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pages ALTER COLUMN id SET DEFAULT nextval('public.pages_id_seq'::regclass);


--
-- Name: permissions id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);


--
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- Name: posts id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.posts ALTER COLUMN id SET DEFAULT nextval('public.posts_id_seq'::regclass);


--
-- Name: raza raza; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.raza ALTER COLUMN raza SET DEFAULT nextval('public.raza_raza_seq'::regclass);


--
-- Name: roles id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);


--
-- Name: servicios id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.servicios ALTER COLUMN id SET DEFAULT nextval('public.servicios_id_seq'::regclass);


--
-- Name: servicios_prestados id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.servicios_prestados ALTER COLUMN id SET DEFAULT nextval('public.servicios_prestados_id_seq'::regclass);


--
-- Name: settings id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.settings ALTER COLUMN id SET DEFAULT nextval('public.settings_id_seq'::regclass);


--
-- Name: translations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.translations ALTER COLUMN id SET DEFAULT nextval('public.translations_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: campanias; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.campanias (id, nombre_campania, descripcion, meta_donaciones, actual_donado, imagen_campania, id_fundacion) FROM stdin;
5	milusa	Gata caucasica,  con tendencia  a oso perezoso	45554545	5555	1674873964.png	1
4	Ayudemos a laika	Estamos recogiendo dinero para ayudar en una cirugía a laika para sanarla	1000000	10000	1674846744.jpg	1
7	Ayudemos a MIlusa	Operaciones a gatos en celo para mayor placer y calidad a la hora de coshar, Operaciones a gatos en celo para mayor placer y calidad a la hora de coshar, Operaciones a gatos en celo para mayor placer y calidad a la hora de coshar	700000	250000	1675540791.png	1
\.


--
-- Data for Name: categories; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.categories (id, parent_id, "order", name, slug, created_at, updated_at) FROM stdin;
1	\N	1	Category 1	category-1	2022-11-24 02:01:29	2022-11-24 02:01:29
2	\N	1	Category 2	category-2	2022-11-24 02:01:29	2022-11-24 02:01:29
\.


--
-- Data for Name: certifica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.certifica (id_fundacion, id_user) FROM stdin;
\.


--
-- Data for Name: certificados; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.certificados (certificados, id_fundacion, nombre, identificacion, fecha, monto, documento, created_at, updated_at) FROM stdin;
1	1	Johan Caicedo	1006700371	2023-01-25	2000000	20230124054618.docx	2023-01-24 05:46:18	2023-01-24 05:46:18
\.


--
-- Data for Name: color; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.color (color, descripcion, created_at, updated_at) FROM stdin;
1	Blanco	\N	\N
2	Negro	\N	\N
3	Cafe	\N	\N
4	Beige	\N	\N
\.


--
-- Data for Name: data_rows; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.data_rows (id, data_type_id, field, type, display_name, required, browse, read, edit, add, delete, details, "order") FROM stdin;
1	1	id	number	ID	t	f	f	f	f	f	\N	1
2	1	name	text	Name	t	t	t	t	t	t	\N	2
3	1	email	text	Email	t	t	t	t	t	t	\N	3
4	1	password	password	Password	t	f	f	t	t	f	\N	4
5	1	remember_token	text	Remember Token	f	f	f	f	f	f	\N	5
6	1	created_at	timestamp	Created At	f	t	t	f	f	f	\N	6
7	1	updated_at	timestamp	Updated At	f	f	f	f	f	f	\N	7
8	1	avatar	image	Avatar	f	t	t	t	t	t	\N	8
9	1	user_belongsto_role_relationship	relationship	Role	f	t	t	t	t	f	{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}	10
10	1	user_belongstomany_role_relationship	relationship	Roles	f	t	t	t	t	f	{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}	11
11	1	settings	hidden	Settings	f	f	f	f	f	f	\N	12
12	2	id	number	ID	t	f	f	f	f	f	\N	1
13	2	name	text	Name	t	t	t	t	t	t	\N	2
14	2	created_at	timestamp	Created At	f	f	f	f	f	f	\N	3
15	2	updated_at	timestamp	Updated At	f	f	f	f	f	f	\N	4
16	3	id	number	ID	t	f	f	f	f	f	\N	1
17	3	name	text	Name	t	t	t	t	t	t	\N	2
18	3	created_at	timestamp	Created At	f	f	f	f	f	f	\N	3
19	3	updated_at	timestamp	Updated At	f	f	f	f	f	f	\N	4
20	3	display_name	text	Display Name	t	t	t	t	t	t	\N	5
21	1	role_id	text	Role	t	t	t	t	t	t	\N	9
22	4	id	number	ID	t	f	f	f	f	f	\N	1
23	4	parent_id	select_dropdown	Parent	f	f	t	t	t	t	{"default":"","null":"","options":{"":"-- None --"},"relationship":{"key":"id","label":"name"}}	2
24	4	order	text	Order	t	t	t	t	t	t	{"default":1}	3
25	4	name	text	Name	t	t	t	t	t	t	\N	4
26	4	slug	text	Slug	t	t	t	t	t	t	{"slugify":{"origin":"name"}}	5
27	4	created_at	timestamp	Created At	f	f	t	f	f	f	\N	6
28	4	updated_at	timestamp	Updated At	f	f	f	f	f	f	\N	7
29	5	id	number	ID	t	f	f	f	f	f	\N	1
30	5	author_id	text	Author	t	f	t	t	f	t	\N	2
31	5	category_id	text	Category	t	f	t	t	t	f	\N	3
32	5	title	text	Title	t	t	t	t	t	t	\N	4
33	5	excerpt	text_area	Excerpt	t	f	t	t	t	t	\N	5
34	5	body	rich_text_box	Body	t	f	t	t	t	t	\N	6
35	5	image	image	Post Image	f	t	t	t	t	t	{"resize":{"width":"1000","height":"null"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}	7
36	5	slug	text	Slug	t	f	t	t	t	t	{"slugify":{"origin":"title","forceUpdate":true},"validation":{"rule":"unique:posts,slug"}}	8
37	5	meta_description	text_area	Meta Description	t	f	t	t	t	t	\N	9
38	5	meta_keywords	text_area	Meta Keywords	t	f	t	t	t	t	\N	10
39	5	status	select_dropdown	Status	t	t	t	t	t	t	{"default":"DRAFT","options":{"PUBLISHED":"published","DRAFT":"draft","PENDING":"pending"}}	11
40	5	created_at	timestamp	Created At	f	t	t	f	f	f	\N	12
41	5	updated_at	timestamp	Updated At	f	f	f	f	f	f	\N	13
42	5	seo_title	text	SEO Title	f	t	t	t	t	t	\N	14
43	5	featured	checkbox	Featured	t	t	t	t	t	t	\N	15
44	6	id	number	ID	t	f	f	f	f	f	\N	1
45	6	author_id	text	Author	t	f	f	f	f	f	\N	2
46	6	title	text	Title	t	t	t	t	t	t	\N	3
47	6	excerpt	text_area	Excerpt	t	f	t	t	t	t	\N	4
48	6	body	rich_text_box	Body	t	f	t	t	t	t	\N	5
49	6	slug	text	Slug	t	f	t	t	t	t	{"slugify":{"origin":"title"},"validation":{"rule":"unique:pages,slug"}}	6
50	6	meta_description	text	Meta Description	t	f	t	t	t	t	\N	7
51	6	meta_keywords	text	Meta Keywords	t	f	t	t	t	t	\N	8
52	6	status	select_dropdown	Status	t	t	t	t	t	t	{"default":"INACTIVE","options":{"INACTIVE":"INACTIVE","ACTIVE":"ACTIVE"}}	9
53	6	created_at	timestamp	Created At	t	t	t	f	f	f	\N	10
54	6	updated_at	timestamp	Updated At	t	f	f	f	f	f	\N	11
55	6	image	image	Page Image	f	t	t	t	t	t	\N	12
56	7	id	text	Id	t	f	f	f	f	f	{}	1
57	7	nombre_mascota	text	Nombre Mascota	t	t	t	t	t	t	{}	3
58	7	descripcion	text	Descripcion	t	t	t	t	t	t	{}	4
59	7	raza	text	Raza	t	t	t	t	t	t	{}	5
60	7	color	text	Color	t	t	t	t	t	t	{}	6
61	7	estado	text	Estado	t	t	t	t	t	t	{}	7
62	7	tamanio	text	Tamanio	t	t	t	t	t	t	{}	8
63	7	tipo	text	Tipo	t	t	t	t	t	t	{}	9
64	7	edad	text	Edad	t	t	t	t	t	t	{}	10
65	7	imagen_mascota	text	Imagen Mascota	t	t	t	t	t	t	{}	11
66	7	id_fundacion	text	Id Fundacion	t	t	t	t	t	t	{}	2
67	8	id	text	Id	t	f	f	f	f	f	{}	1
68	8	nombre_campania	text	Nombre Campania	t	t	t	t	t	t	{}	3
69	8	descripcion	text	Descripcion	t	t	t	t	t	t	{}	4
70	8	meta_donaciones	text	Meta Donaciones	t	t	t	t	t	t	{}	5
71	8	actual_donado	text	Actual Donado	f	t	t	t	t	t	{}	6
72	8	imagen_campania	text	Imagen Campania	f	t	t	t	t	t	{}	7
73	8	id_fundacion	text	Id Fundacion	t	t	t	t	t	t	{}	2
74	10	id	text	Id	t	f	f	f	f	f	{}	1
75	10	nombre_servicio	text	Nombre Servicio	t	t	t	t	t	t	{}	3
76	10	nombre_cliente	text	Nombre Cliente	t	t	t	t	t	t	{}	4
77	10	id_cliente	text	Id Cliente	t	t	t	t	t	t	{}	5
78	10	fecha	text	Fecha	t	t	t	t	t	t	{}	6
79	10	descripcion	text	Descripcion	f	t	t	t	t	t	{}	7
80	10	id_fundacion	text	Id Fundacion	t	t	t	t	t	t	{}	2
81	11	id	text	Id	t	f	f	f	f	f	{}	1
82	11	nombre	text	Nombre	t	t	t	t	t	t	{}	2
83	11	logo	text	Logo	t	t	t	t	t	t	{}	3
84	12	id	text	Id	t	f	f	f	f	f	{}	1
85	12	nombre_mascota	text	Nombre Mascota	t	t	t	t	t	t	{}	3
86	12	descripcion	text	Descripcion	t	t	t	t	t	t	{}	4
87	12	raza	text	Raza	f	t	t	t	t	t	{}	5
88	12	color	text	Color	t	t	t	t	t	t	{}	6
89	12	estado	text	Estado	t	t	t	t	t	t	{}	7
90	12	tamanio	text	Tamanio	t	t	t	t	t	t	{}	8
91	12	tipo	text	Tipo	t	t	t	t	t	t	{}	9
92	12	imagen_mascota	text	Imagen Mascota	t	t	t	t	t	t	{}	10
93	12	especie	text	Especie	t	t	t	t	t	t	{}	11
94	12	id_user	text	Id User	t	t	t	t	t	t	{}	2
95	13	id	text	Id	t	f	f	f	f	f	{}	1
96	13	nombre_serviciio	text	Nombre Serviciio	t	t	t	t	t	t	{}	3
97	13	descripcion	text	Descripcion	t	t	t	t	t	t	{}	4
98	13	imagen_servicio	text	Imagen Servicio	t	t	t	t	t	t	{}	5
99	13	id_fundacion	text	Id Fundacion	t	t	t	t	t	t	{}	2
\.


--
-- Data for Name: data_types; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, description, generate_permissions, created_at, updated_at, server_side, controller, policy_name, details) FROM stdin;
1	users	users	User	Users	voyager-person	TCG\\Voyager\\Models\\User		t	2022-11-24 02:01:29	2022-11-24 02:01:29	0	TCG\\Voyager\\Http\\Controllers\\VoyagerUserController	TCG\\Voyager\\Policies\\UserPolicy	\N
2	menus	menus	Menu	Menus	voyager-list	TCG\\Voyager\\Models\\Menu		t	2022-11-24 02:01:29	2022-11-24 02:01:29	0		\N	\N
3	roles	roles	Role	Roles	voyager-lock	TCG\\Voyager\\Models\\Role		t	2022-11-24 02:01:29	2022-11-24 02:01:29	0	TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController	\N	\N
4	categories	categories	Category	Categories	voyager-categories	TCG\\Voyager\\Models\\Category		t	2022-11-24 02:01:29	2022-11-24 02:01:29	0		\N	\N
5	posts	posts	Post	Posts	voyager-news	TCG\\Voyager\\Models\\Post		t	2022-11-24 02:01:29	2022-11-24 02:01:29	0		TCG\\Voyager\\Policies\\PostPolicy	\N
6	pages	pages	Page	Pages	voyager-file-text	TCG\\Voyager\\Models\\Page		t	2022-11-24 02:01:29	2022-11-24 02:01:29	0		\N	\N
7	mascotas	mascotas	Mascota	Mascotas	voyager-github	App\\Models\\Mascota	\N	t	2022-12-12 23:34:37	2022-12-12 23:34:37	0	\N	\N	{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}
8	campanias	companias	Compañia	Compañias	voyager-company	App\\Models\\Campania	\N	t	2022-12-13 02:01:32	2022-12-13 02:01:32	0	\N	\N	{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}
11	fundaciones	fundaciones	Fundacion	Fundaciones	voyager-paw	App\\Models\\Fundacion	\N	t	2022-12-13 02:05:51	2022-12-13 02:05:51	0	\N	\N	{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}
12	mascotas_perdidas	mascotas-perdidas	Mascota Perdida	Mascotas Perdidas	fa fa-heartbeat	App\\Models\\MascotaPerdida	\N	t	2022-12-13 02:17:02	2022-12-13 02:22:01	0	\N	\N	{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}
10	servicios_prestados	servicios-prestados	Servicio Prestado	Servicios Prestados	fa fa-ambulance	App\\Models\\ServicioPrestado	\N	t	2022-12-13 02:03:53	2022-12-13 02:24:04	0	\N	\N	{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}
13	servicios	servicios	Servicio	Servicios	voyager-documentation	App\\Models\\Servicio	\N	t	2022-12-13 02:26:00	2022-12-13 02:26:00	0	\N	\N	{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}
\.


--
-- Data for Name: especie; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.especie (especie, descripcion, created_at, updated_at) FROM stdin;
1	Perro	\N	\N
2	Gato	\N	\N
\.


--
-- Data for Name: estado; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.estado (estado, descripcion, created_at, updated_at) FROM stdin;
1	En adopción	\N	\N
2	Adoptado	\N	\N
3	Encontrado	\N	\N
4	Perdido	\N	\N
\.


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: fundaciones; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.fundaciones (id, nombre, logo) FROM stdin;
1	Hogar de perros	1673382480.png
\.


--
-- Data for Name: mascotas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.mascotas (id, nombre_mascota, descripcion, raza, color, estado, tamanio, especie, edad, imagen_mascota, id_fundacion) FROM stdin;
7	Roko	Un cachorro juguetón  con mucha energía y de mucha atención	1	3	2	30	1	4	1671806563.webp	1
8	Ramona	Una amiga para acompañarte en todo momento de tu vida sin ser demasiado dependiente a ti	6	1	2	20	2	6	1671806620.png	1
9	Toby	Un amigo para toda la vida, juguetón, cariñoso y obediente.	5	1	2	45	1	1	1671808676.jpeg	1
10	Rofus	Un amigo para toda la vida, juguetón, cariñoso y obediente.	5	1	2	40	1	0	1671808699.jpeg	1
11	Max	Un amigo para toda la vida, juguetón, cariñoso y obediente.	1	1	2	35	1	3	1671808740.jpeg	1
12	Simon	Un amigo para toda la vida, juguetón, cariñoso y obediente.	1	2	2	40	1	4	1671808771.jpeg	1
13	Simon	Un amigo para toda la vida, juguetón, cariñoso y obediente.	4	2	2	35	1	5	1671808808.jpeg	1
15	Leo	Un amigo para toda la vida, juguetón, cariñoso y obediente.	5	3	2	40	1	2	1671809157.jpeg	1
16	Leonidas	Un amigo para toda la vida, juguetón, cariñoso y obediente.	4	2	2	35	1	3	1671809191.jpeg	1
17	Zeus	Un amigo para toda la vida, juguetón, cariñoso y obediente.	5	1	2	55	1	3	1671809218.jpeg	1
18	Cleo	Un amigo para toda la vida, juguetón, cariñoso y obediente.	3	2	2	20	2	1	1671809247.jpeg	1
19	Romea	Un amigo para toda la vida, juguetón, cariñoso y obediente.	6	2	2	25	2	2	1671809317.jpeg	1
20	Masapan	Un amigo para toda la vida, juguetón, cariñoso y obediente.	4	1	2	20	2	3	1671809346.jpeg	1
21	Idel	Un amigo para toda la vida, juguetón, cariñoso y obediente.	4	2	2	20	2	1	1671809375.jpeg	1
22	Safiro	Un amigo para toda la vida, juguetón, cariñoso y obediente.	4	4	2	20	2	1	1671809404.jpeg	1
23	Pekas	Un amigo para toda la vida, juguetón, cariñoso y obediente.	1	1	2	20	2	0	1671809426.jpeg	1
27	Ramona	Cariñosa	3	1	2	50	1	1	1676062058.jpg	1
\.


--
-- Data for Name: mascotas_perdidas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.mascotas_perdidas (id, nombre_mascota, descripcion, raza, color, estado, tamanio, imagen_mascota, especie, id_user) FROM stdin;
8	Gatica	Vista por última vez en el Barrio la Alborada Cll 4 D 24-75. Pecho y patitas totalmente blanca. Tiene una pequeña mancha blanca en el lomo. Si tienes información llama al 3137012474.	3	1	4	25	1671784223.png	2	28
\.


--
-- Data for Name: menu_items; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.menu_items (id, menu_id, title, url, target, icon_class, color, parent_id, "order", created_at, updated_at, route, parameters) FROM stdin;
1	1	Dashboard		_self	voyager-boat	\N	\N	1	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.dashboard	\N
3	1	Users		_self	voyager-person	\N	\N	3	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.users.index	\N
4	1	Roles		_self	voyager-lock	\N	\N	2	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.roles.index	\N
2	1	Media		_self	voyager-images	\N	\N	4	2022-11-24 02:01:29	2022-12-23 18:57:34	voyager.media.index	\N
6	1	Menu Builder		_self	voyager-list	\N	5	1	2022-11-24 02:01:29	2022-12-23 18:57:34	voyager.menus.index	\N
7	1	Database		_self	voyager-data	\N	5	2	2022-11-24 02:01:29	2022-12-23 18:57:34	voyager.database.index	\N
8	1	Compass		_self	voyager-compass	\N	5	3	2022-11-24 02:01:29	2022-12-23 18:57:34	voyager.compass.index	\N
9	1	BREAD		_self	voyager-bread	\N	5	4	2022-11-24 02:01:29	2022-12-23 18:57:34	voyager.bread.index	\N
13	1	Pages		_self	voyager-file-text	\N	5	5	2022-11-24 02:01:29	2022-12-23 18:57:34	voyager.pages.index	\N
12	1	Posts		_self	voyager-news	\N	5	6	2022-11-24 02:01:29	2022-12-23 18:57:37	voyager.posts.index	\N
5	1	Tools		_self	voyager-tools	\N	\N	5	2022-11-24 02:01:29	2022-12-23 18:57:43	\N	\N
11	1	Categories		_self	voyager-categories	\N	5	7	2022-11-24 02:01:29	2022-12-23 18:57:43	voyager.categories.index	\N
10	1	Settings		_self	voyager-settings	\N	\N	6	2022-11-24 02:01:29	2022-12-23 18:57:43	voyager.settings.index	\N
14	1	Mascotas		_self	voyager-github	\N	\N	7	2022-12-12 23:34:38	2022-12-23 18:57:43	voyager.mascotas.index	\N
15	1	Compañias		_self	voyager-company	\N	\N	8	2022-12-13 02:01:34	2022-12-23 18:57:43	voyager.companias.index	\N
16	1	Servicios Prestados		_self	fa fa-ambulance	#000000	\N	9	2022-12-13 02:03:54	2022-12-23 18:57:43	voyager.servicios-prestados.index	null
17	1	Fundaciones		_self	voyager-paw	\N	\N	10	2022-12-13 02:05:51	2022-12-23 18:57:43	voyager.fundaciones.index	\N
18	1	Mascotas Perdidas		_self	fa fa-heartbeat	#000000	\N	11	2022-12-13 02:17:02	2022-12-23 18:57:43	voyager.mascotas-perdidas.index	null
19	1	Servicios		_self	voyager-documentation	\N	\N	12	2022-12-13 02:26:01	2022-12-23 18:57:43	voyager.servicios.index	\N
\.


--
-- Data for Name: menus; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.menus (id, name, created_at, updated_at) FROM stdin;
1	admin	2022-11-24 02:01:29	2022-11-24 02:01:29
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2016_01_01_000000_add_voyager_user_fields	1
4	2016_01_01_000000_create_data_types_table	1
5	2016_05_19_173453_create_menu_table	1
6	2016_10_21_190000_create_roles_table	1
7	2016_10_21_190000_create_settings_table	1
8	2016_11_30_135954_create_permission_table	1
9	2016_11_30_141208_create_permission_role_table	1
10	2016_12_26_201236_data_types__add__server_side	1
11	2017_01_13_000000_add_route_to_menu_items_table	1
12	2017_01_14_005015_create_translations_table	1
13	2017_01_15_000000_make_table_name_nullable_in_permissions_table	1
14	2017_03_06_000000_add_controller_to_data_types_table	1
15	2017_04_21_000000_add_order_to_data_rows_table	1
16	2017_07_05_210000_add_policyname_to_data_types_table	1
17	2017_08_05_000000_add_group_to_settings_table	1
18	2017_11_26_013050_add_user_role_relationship	1
19	2017_11_26_015000_create_user_roles_table	1
20	2018_03_11_000000_add_user_settings	1
21	2018_03_14_000000_add_details_to_data_types_table	1
22	2018_03_16_000000_make_settings_value_nullable	1
23	2019_08_19_000000_create_failed_jobs_table	1
24	2019_12_14_000001_create_personal_access_tokens_table	1
25	2016_01_01_000000_create_pages_table	2
26	2016_01_01_000000_create_posts_table	2
27	2016_02_15_204651_create_categories_table	2
28	2017_04_11_000000_alter_post_nullable_fields_table	2
29	2022_12_01_233447_update_users_table	3
30	2022_12_11_001138_create_fundaciones_table	4
31	2022_12_11_001257_create_servicios_prestados_table	4
32	2022_12_11_001344_create_campanias_table	4
33	2022_12_11_023521_create_servicios_table	4
34	2022_12_11_023600_create_mascotas_table	4
35	2022_12_11_023630_create_certifica_table	4
36	2022_12_11_023656_create_mascotas_perdidas_table	4
37	2022_12_11_030629_add_features_to_users	4
38	2022_12_16_233807_create_raza_table	5
39	2022_12_16_234033_create_color_table	5
40	2022_12_16_234111_create_estado_table	5
41	2022_12_17_191744_renamecolum_mascotas_colums	5
42	2022_12_17_191745_change_typecolumn_mascotas	5
43	2022_12_17_192253_change_typecolumn_to_mascotas	5
44	2022_12_17_192437_create_especie_table	5
45	2022_12_17_192439_add_relation_to_mascotas	5
46	2022_12_17_192554_change_typecolumn_to_mascotas_perdidas	5
47	2022_12_17_192928_add_relation_to_mascotas_perdidas	5
48	2022_12_18_143934_alter_servicios_prestados_table	5
49	2022_12_19_020850_add_features_to_raza	5
50	2023_01_24_084310_create_certificados_table	6
\.


--
-- Data for Name: pages; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.pages (id, author_id, title, excerpt, body, image, slug, meta_description, meta_keywords, status, created_at, updated_at) FROM stdin;
1	0	Hello World	Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.	<p>Hello World. Scallywag grog swab Cat o'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>	pages/page1.jpg	hello-world	Yar Meta Description	Keyword1, Keyword2	ACTIVE	2022-11-24 02:01:29	2022-11-24 02:01:29
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_resets (email, token, created_at) FROM stdin;
jh0na13x4nd3r2001@gmail.com	$2y$10$1yFVs0EwtEhIlSRt1XhgCeKpCoaW.je6WYvBKIm4EUPQHXwOV6NcG	2022-12-02 20:23:21
danielxz331@gmail.com	$2y$10$W/fl1msQnhrhhY3flLawbewpaiy.R5HtVwMd50DaH11QfaqKXcr/q	2022-12-09 18:24:51
sebast.lilia@gmail.com	$2y$10$ZHlzQP2b8neI3WmK6GAKcOGe9relaNhdToDNnW54k.i496mI0b1vi	2022-12-09 19:08:01
casallas.jaimes@gmail.com	$2y$10$ZcvQtDCfeEmVATnH66FlE.cN7AlvO2wtt1FyYv6jyTOCebICQf3AG	2022-12-11 03:29:33
johan.caicedo.garcia@unillanos.edu.co	$2y$10$EhlvFPbfsbjozB5wERXAGOFKcvhejwH/Tl71AujFRjUGR/KbuJjTG	2022-12-13 16:33:19
daniel.martinez.baquero@unillanos.edu.co	$2y$10$l3RhPdrhmTt3LG63rN5Z5uXjUtQAgxZ9qEXy35sO5uxh46vucot.G	2022-12-13 16:37:30
danielxz211@gmail.com	$2y$10$QwX5n8BOOLzFqSPP4LC2Y.i1u.sxq5nQUoKNY7TpkuyygP4acEx0u	2022-12-13 16:38:56
\.


--
-- Data for Name: permission_role; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.permission_role (permission_id, role_id) FROM stdin;
1	1
2	1
3	1
4	1
5	1
6	1
7	1
8	1
9	1
10	1
11	1
12	1
13	1
14	1
15	1
16	1
17	1
18	1
19	1
20	1
21	1
22	1
23	1
24	1
25	1
26	1
27	1
28	1
29	1
30	1
31	1
32	1
33	1
34	1
35	1
36	1
37	1
38	1
39	1
40	1
31	2
32	2
36	2
37	2
41	1
42	1
43	1
44	1
45	1
46	1
47	1
48	1
49	1
50	1
51	1
52	1
53	1
54	1
55	1
56	1
57	1
58	1
59	1
60	1
61	1
62	1
63	1
64	1
65	1
66	1
67	1
68	1
69	1
70	1
\.


--
-- Data for Name: permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.permissions (id, key, table_name, created_at, updated_at) FROM stdin;
1	browse_admin	\N	2022-11-24 02:01:29	2022-11-24 02:01:29
2	browse_bread	\N	2022-11-24 02:01:29	2022-11-24 02:01:29
3	browse_database	\N	2022-11-24 02:01:29	2022-11-24 02:01:29
4	browse_media	\N	2022-11-24 02:01:29	2022-11-24 02:01:29
5	browse_compass	\N	2022-11-24 02:01:29	2022-11-24 02:01:29
6	browse_menus	menus	2022-11-24 02:01:29	2022-11-24 02:01:29
7	read_menus	menus	2022-11-24 02:01:29	2022-11-24 02:01:29
8	edit_menus	menus	2022-11-24 02:01:29	2022-11-24 02:01:29
9	add_menus	menus	2022-11-24 02:01:29	2022-11-24 02:01:29
10	delete_menus	menus	2022-11-24 02:01:29	2022-11-24 02:01:29
11	browse_roles	roles	2022-11-24 02:01:29	2022-11-24 02:01:29
12	read_roles	roles	2022-11-24 02:01:29	2022-11-24 02:01:29
13	edit_roles	roles	2022-11-24 02:01:29	2022-11-24 02:01:29
14	add_roles	roles	2022-11-24 02:01:29	2022-11-24 02:01:29
15	delete_roles	roles	2022-11-24 02:01:29	2022-11-24 02:01:29
16	browse_users	users	2022-11-24 02:01:29	2022-11-24 02:01:29
17	read_users	users	2022-11-24 02:01:29	2022-11-24 02:01:29
18	edit_users	users	2022-11-24 02:01:29	2022-11-24 02:01:29
19	add_users	users	2022-11-24 02:01:29	2022-11-24 02:01:29
20	delete_users	users	2022-11-24 02:01:29	2022-11-24 02:01:29
21	browse_settings	settings	2022-11-24 02:01:29	2022-11-24 02:01:29
22	read_settings	settings	2022-11-24 02:01:29	2022-11-24 02:01:29
23	edit_settings	settings	2022-11-24 02:01:29	2022-11-24 02:01:29
24	add_settings	settings	2022-11-24 02:01:29	2022-11-24 02:01:29
25	delete_settings	settings	2022-11-24 02:01:29	2022-11-24 02:01:29
26	browse_categories	categories	2022-11-24 02:01:29	2022-11-24 02:01:29
27	read_categories	categories	2022-11-24 02:01:29	2022-11-24 02:01:29
28	edit_categories	categories	2022-11-24 02:01:29	2022-11-24 02:01:29
29	add_categories	categories	2022-11-24 02:01:29	2022-11-24 02:01:29
30	delete_categories	categories	2022-11-24 02:01:29	2022-11-24 02:01:29
31	browse_posts	posts	2022-11-24 02:01:29	2022-11-24 02:01:29
32	read_posts	posts	2022-11-24 02:01:29	2022-11-24 02:01:29
33	edit_posts	posts	2022-11-24 02:01:29	2022-11-24 02:01:29
34	add_posts	posts	2022-11-24 02:01:29	2022-11-24 02:01:29
35	delete_posts	posts	2022-11-24 02:01:29	2022-11-24 02:01:29
36	browse_pages	pages	2022-11-24 02:01:29	2022-11-24 02:01:29
37	read_pages	pages	2022-11-24 02:01:29	2022-11-24 02:01:29
38	edit_pages	pages	2022-11-24 02:01:29	2022-11-24 02:01:29
39	add_pages	pages	2022-11-24 02:01:29	2022-11-24 02:01:29
40	delete_pages	pages	2022-11-24 02:01:29	2022-11-24 02:01:29
41	browse_mascotas	mascotas	2022-12-12 23:34:38	2022-12-12 23:34:38
42	read_mascotas	mascotas	2022-12-12 23:34:38	2022-12-12 23:34:38
43	edit_mascotas	mascotas	2022-12-12 23:34:38	2022-12-12 23:34:38
44	add_mascotas	mascotas	2022-12-12 23:34:38	2022-12-12 23:34:38
45	delete_mascotas	mascotas	2022-12-12 23:34:38	2022-12-12 23:34:38
46	browse_campanias	campanias	2022-12-13 02:01:32	2022-12-13 02:01:32
47	read_campanias	campanias	2022-12-13 02:01:32	2022-12-13 02:01:32
48	edit_campanias	campanias	2022-12-13 02:01:32	2022-12-13 02:01:32
49	add_campanias	campanias	2022-12-13 02:01:32	2022-12-13 02:01:32
50	delete_campanias	campanias	2022-12-13 02:01:32	2022-12-13 02:01:32
51	browse_servicios_prestados	servicios_prestados	2022-12-13 02:03:54	2022-12-13 02:03:54
52	read_servicios_prestados	servicios_prestados	2022-12-13 02:03:54	2022-12-13 02:03:54
53	edit_servicios_prestados	servicios_prestados	2022-12-13 02:03:54	2022-12-13 02:03:54
54	add_servicios_prestados	servicios_prestados	2022-12-13 02:03:54	2022-12-13 02:03:54
55	delete_servicios_prestados	servicios_prestados	2022-12-13 02:03:54	2022-12-13 02:03:54
56	browse_fundaciones	fundaciones	2022-12-13 02:05:51	2022-12-13 02:05:51
57	read_fundaciones	fundaciones	2022-12-13 02:05:51	2022-12-13 02:05:51
58	edit_fundaciones	fundaciones	2022-12-13 02:05:51	2022-12-13 02:05:51
59	add_fundaciones	fundaciones	2022-12-13 02:05:51	2022-12-13 02:05:51
60	delete_fundaciones	fundaciones	2022-12-13 02:05:51	2022-12-13 02:05:51
61	browse_mascotas_perdidas	mascotas_perdidas	2022-12-13 02:17:02	2022-12-13 02:17:02
62	read_mascotas_perdidas	mascotas_perdidas	2022-12-13 02:17:02	2022-12-13 02:17:02
63	edit_mascotas_perdidas	mascotas_perdidas	2022-12-13 02:17:02	2022-12-13 02:17:02
64	add_mascotas_perdidas	mascotas_perdidas	2022-12-13 02:17:02	2022-12-13 02:17:02
65	delete_mascotas_perdidas	mascotas_perdidas	2022-12-13 02:17:02	2022-12-13 02:17:02
66	browse_servicios	servicios	2022-12-13 02:26:01	2022-12-13 02:26:01
67	read_servicios	servicios	2022-12-13 02:26:01	2022-12-13 02:26:01
68	edit_servicios	servicios	2022-12-13 02:26:01	2022-12-13 02:26:01
69	add_servicios	servicios	2022-12-13 02:26:01	2022-12-13 02:26:01
70	delete_servicios	servicios	2022-12-13 02:26:01	2022-12-13 02:26:01
\.


--
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: posts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.posts (id, author_id, category_id, title, seo_title, excerpt, body, image, slug, meta_description, meta_keywords, status, featured, created_at, updated_at) FROM stdin;
1	0	\N	Lorem Ipsum Post	\N	This is the excerpt for the Lorem Ipsum Post	<p>This is the body of the lorem ipsum post</p>	posts/post1.jpg	lorem-ipsum-post	This is the meta description	keyword1, keyword2, keyword3	PUBLISHED	f	2022-11-24 02:01:29	2022-11-24 02:01:29
2	0	\N	My Sample Post	\N	This is the excerpt for the sample Post	<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>	posts/post2.jpg	my-sample-post	Meta Description for sample post	keyword1, keyword2, keyword3	PUBLISHED	f	2022-11-24 02:01:29	2022-11-24 02:01:29
3	0	\N	Latest Post	\N	This is the excerpt for the latest post	<p>This is the body for the latest post</p>	posts/post3.jpg	latest-post	This is the meta description	keyword1, keyword2, keyword3	PUBLISHED	f	2022-11-24 02:01:29	2022-11-24 02:01:29
4	0	\N	Yarr Post	\N	Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.	<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>	posts/post4.jpg	yarr-post	this be a meta descript	keyword1, keyword2, keyword3	PUBLISHED	f	2022-11-24 02:01:29	2022-11-24 02:01:29
\.


--
-- Data for Name: raza; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.raza (raza, descripcion, created_at, updated_at, especie) FROM stdin;
1	French poodle	\N	\N	1
2	Beagle	\N	\N	1
3	Criollo	\N	\N	1
4	Pincher	\N	\N	1
5	Abisinio	\N	\N	2
6	Asiatico	\N	\N	2
7	Balinas	\N	\N	2
8	Bengali	\N	\N	2
\.


--
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.roles (id, name, display_name, created_at, updated_at) FROM stdin;
1	admin	Administrator	2022-11-24 02:01:29	2022-11-24 02:01:29
2	user	Normal User	2022-11-24 02:01:29	2022-11-24 02:01:29
3	fundacion	fundacion	2022-12-16 17:26:00	2022-12-16 17:26:00
\.


--
-- Data for Name: servicios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.servicios (id, nombre_serviciio, descripcion, imagen_servicio, id_fundacion) FROM stdin;
4	Cirugía ortopédica	Ofrecemos servicios de cirugía ortopédica de alta calidad para ayudar a mejorar la movilidad y la calidad de vida de su mascota. Contáctenos para hacer una cita y comience a ayudar a su perro o gato hoy mismo.	1671761300.jpg	1
3	Esterilización	Ofrecemos servicios de esterilización de mascotas asequibles y de alta calidad en nuestra fundación. Ayúdanos a controlar la superpoblación de perros y gatos. Solicite una cita para su mascota hoy mismo. ¡Juntos podemos hacer la diferencia!	1671761860.jpg	1
5	Vacunación	Ofrecemos una amplia gama de vacunas de alta calidad para perros y gatos en nuestra fundación. Contáctenos para hacer una cita y comience a proteger a su mascota hoy mismo.	1673390760.jpg	1
6	Hospitalización	Ofrecemos servicios de hospitalización de alta calidad para perros y gatos en nuestra fundación. Contáctenos para hacer una cita y comience a cuidar mejor a su mascota hoy mismo.	1674792385.jpg	1
\.


--
-- Data for Name: servicios_prestados; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.servicios_prestados (id, nombre_servicio, id_cliente, fecha, descripcion, id_fundacion, nombre_cliente) FROM stdin;
2	Cirugia	34343	2023-02-03	Nesjsj	1	Johan
\.


--
-- Data for Name: settings; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.settings (id, key, display_name, value, details, type, "order", "group") FROM stdin;
1	site.title	Site Title	Site Title		text	1	Site
2	site.description	Site Description	Site Description		text	2	Site
3	site.logo	Site Logo			image	3	Site
5	admin.bg_image	Admin Background Image			image	5	Admin
6	admin.title	Admin Title	Voyager		text	1	Admin
7	admin.description	Admin Description	Welcome to Voyager. The Missing Admin for Laravel		text	2	Admin
8	admin.loader	Admin Loader			image	3	Admin
4	site.google_analytics_tracking_id	Google Analytics Tracking ID	\N		text	4	Site
10	admin.google_analytics_client_id	Google Analytics Client ID (used for admin dashboard)	\N		text	1	Admin
9	admin.icon_image	Admin Icon Image	settings/December2022/nVFNHl714kWp4yzCn4OU.png		image	4	Admin
\.


--
-- Data for Name: translations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.translations (id, table_name, column_name, foreign_key, locale, value, created_at, updated_at) FROM stdin;
1	data_types	display_name_singular	5	pt	Post	2022-11-24 02:01:29	2022-11-24 02:01:29
2	data_types	display_name_singular	6	pt	Página	2022-11-24 02:01:29	2022-11-24 02:01:29
3	data_types	display_name_singular	1	pt	Utilizador	2022-11-24 02:01:29	2022-11-24 02:01:29
4	data_types	display_name_singular	4	pt	Categoria	2022-11-24 02:01:29	2022-11-24 02:01:29
5	data_types	display_name_singular	2	pt	Menu	2022-11-24 02:01:29	2022-11-24 02:01:29
6	data_types	display_name_singular	3	pt	Função	2022-11-24 02:01:29	2022-11-24 02:01:29
7	data_types	display_name_plural	5	pt	Posts	2022-11-24 02:01:29	2022-11-24 02:01:29
8	data_types	display_name_plural	6	pt	Páginas	2022-11-24 02:01:29	2022-11-24 02:01:29
9	data_types	display_name_plural	1	pt	Utilizadores	2022-11-24 02:01:29	2022-11-24 02:01:29
10	data_types	display_name_plural	4	pt	Categorias	2022-11-24 02:01:29	2022-11-24 02:01:29
11	data_types	display_name_plural	2	pt	Menus	2022-11-24 02:01:29	2022-11-24 02:01:29
12	data_types	display_name_plural	3	pt	Funções	2022-11-24 02:01:29	2022-11-24 02:01:29
13	categories	slug	1	pt	categoria-1	2022-11-24 02:01:29	2022-11-24 02:01:29
14	categories	name	1	pt	Categoria 1	2022-11-24 02:01:29	2022-11-24 02:01:29
15	categories	slug	2	pt	categoria-2	2022-11-24 02:01:29	2022-11-24 02:01:29
16	categories	name	2	pt	Categoria 2	2022-11-24 02:01:29	2022-11-24 02:01:29
17	pages	title	1	pt	Olá Mundo	2022-11-24 02:01:29	2022-11-24 02:01:29
18	pages	slug	1	pt	ola-mundo	2022-11-24 02:01:29	2022-11-24 02:01:29
19	pages	body	1	pt	<p>Olá Mundo. Scallywag grog swab Cat o'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>	2022-11-24 02:01:29	2022-11-24 02:01:29
20	menu_items	title	1	pt	Painel de Controle	2022-11-24 02:01:29	2022-11-24 02:01:29
21	menu_items	title	2	pt	Media	2022-11-24 02:01:29	2022-11-24 02:01:29
22	menu_items	title	12	pt	Publicações	2022-11-24 02:01:29	2022-11-24 02:01:29
23	menu_items	title	3	pt	Utilizadores	2022-11-24 02:01:29	2022-11-24 02:01:29
24	menu_items	title	11	pt	Categorias	2022-11-24 02:01:29	2022-11-24 02:01:29
25	menu_items	title	13	pt	Páginas	2022-11-24 02:01:29	2022-11-24 02:01:29
26	menu_items	title	4	pt	Funções	2022-11-24 02:01:29	2022-11-24 02:01:29
27	menu_items	title	5	pt	Ferramentas	2022-11-24 02:01:29	2022-11-24 02:01:29
28	menu_items	title	6	pt	Menus	2022-11-24 02:01:29	2022-11-24 02:01:29
29	menu_items	title	7	pt	Base de dados	2022-11-24 02:01:29	2022-11-24 02:01:29
30	menu_items	title	10	pt	Configurações	2022-11-24 02:01:29	2022-11-24 02:01:29
\.


--
-- Data for Name: user_roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.user_roles (user_id, role_id) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, avatar, role_id, settings, external_id, external_auth, id_fundacion) FROM stdin;
29	Yeiner	yocastro1407@gmail.com	\N	$2y$10$3VBreTecqfTkBOKWeLJYquoWu2BgBTkxrCh4H3.seciWHjA5Z9XKm	\N	2022-12-20 02:15:44	2022-12-20 02:15:44	users/default.png	2	\N	\N	\N	\N
12	juan girald0	juan@gmail.com	\N	$2y$10$DlscOJPnElmhDXIFKpSi1.SCvUF5LLvorOyGizsV0100/b6OATVjS	\N	2022-12-02 16:46:54	2022-12-02 16:46:54	users/default.png	2	\N	\N	\N	\N
27	Stiiven moreno	stiivenmoreno@gmail.com	\N	$2y$10$zfoTuhiYCRCAe6zYOPaqLeM3VXT3QhgFBV3z3QwVGP12l5Cl7gTNK	\N	2022-12-16 17:20:44	2022-12-16 17:38:42	https://lh3.googleusercontent.com/a/AEdFTp4DuPRNdcT1UxLz4xNCglhk-1ULTdk8w5HYuLalAQ=s96-c	3	{"locale":"es"}	101904667013449696872	google	\N
21	Juan Lopez	lopez@gmail.com	\N	$2y$10$UZbkj.om3jdaWhXtyz0byOIcHCDvy2ji8TBYIC.c8vZp6Cmbut64a	\N	2022-12-09 04:27:25	2022-12-09 04:27:25	users/default.png	2	\N	\N	\N	\N
4	DANIEL STIVEN MARTINEZ BAQUERO	daniel.martinez.baquero@unillanos.edu.co	\N	\N	\N	2022-12-02 03:47:17	2022-12-02 03:47:17	https://lh3.googleusercontent.com/a/ALm5wu0nMEsbFc4TBWBYOvQkKKp1i7KpS4W_C5BiZi5G=s96-c	2	\N	117194443424750915175	google	\N
5	Johan Caicedo	spacestore365@gmail.com	\N	\N	\N	2022-12-02 03:47:48	2022-12-02 03:47:48	https://lh3.googleusercontent.com/a/ALm5wu0bfsCkhACoJqoALBEgDzmLW4xs9GAGZ80IAi3g=s96-c	2	\N	101644043732505825144	google	\N
7	LlanoSystems Software company	llanosystems@gmail.com	\N	\N	\N	2022-12-02 03:50:08	2022-12-02 03:50:08	https://lh3.googleusercontent.com/a/ALm5wu2e1DXVDMRZReAjlgrvKmnoBWF5V6TyviM2ggtU=s96-c	2	\N	103215903123032458573	google	\N
13	Alexander Pined@	alex@gmail.com	\N	$2y$10$jsncMjbhN7WEGXOnd18dL.CRNcoWuc2MLPyY7O/IsEvpiHmsjjUgq	\N	2022-12-02 20:14:17	2022-12-02 20:14:17	users/default.png	2	\N	\N	\N	\N
9	Lina Gomez	linagomez@gmail.com	\N	$2y$10$GDCFwsI33P5zY03KRniUzuC75rgRmQfmhVl5mS7b7uR3xF88B71V.	\N	2022-12-02 15:59:30	2022-12-02 15:59:30	users/default.png	2	\N	\N	\N	\N
10	Pepito perez %	pepitoperez@gmail.com	\N	$2y$10$3iMdOQkN4nGU98K.IlBxeeqEGk0U1ABcdh7KJhrFrWDvSO2F12gZ6	\N	2022-12-02 16:06:26	2022-12-02 16:06:26	users/default.png	2	\N	\N	\N	\N
11	pepito perez	pepito@gmail.com	\N	$2y$10$1T8qJCxqbnccOodboah5MexAHE.pJTLlQYR06VrUaneYB3YGiyKH2	\N	2022-12-02 16:14:32	2022-12-02 16:14:32	users/default.png	2	\N	\N	\N	\N
14	JHON ALEXANDER ROA RONDON	jhon.roa@unillanos.edu.co	\N	\N	\N	2022-12-02 20:18:44	2022-12-02 20:18:44	https://lh3.googleusercontent.com/a/ALm5wu1ig9WrLTSyyxdQdsdys5bGJv5DlUm7c1km7AorJg=s96-c	2	\N	100672680399879929761	google	\N
22	Martin	sebast.lilia@gmail.com	\N	$2y$10$DCfN9eCFkT0hoGWhX/iuvuXPsmHW/296487XzAsXex6fI3VKmUHke	\N	2022-12-09 19:07:04	2022-12-09 19:07:04	users/default.png	2	\N	\N	\N	\N
15	Jhon Alexander	jh0na13x4nd3r2001@gmail.com	\N	$2y$10$wBPJn1kJp4gidmITYDDWe.yYBdTfYvx536ZQFm8S3J6mccjycL0.q	\N	2022-12-02 20:23:01	2022-12-02 20:23:01	users/default.png	2	\N	\N	\N	\N
16	Omar García #	omargarcia@gmial.com	\N	$2y$10$IPpOyhUHUunDaY8iZP6b/ukrg7CaeKijz9Oa3PM95AgfFmdHZyryi	\N	2022-12-03 02:40:58	2022-12-03 02:40:58	users/default.png	2	\N	\N	\N	\N
17	Leandro Meza	motarizado@hotmail.com	\N	$2y$10$ivHrsQgsCFz2DQmZEshqz.0sYKzPtnAkDZnjJgIMLJdmoLAWaLJH6	\N	2022-12-03 03:08:04	2022-12-03 03:08:04	users/default.png	2	\N	\N	\N	\N
18	Lily Allen	allen@gopro.com	\N	$2y$10$2K39OUZz5.1SwkHAEzu9IuKY0p8H0KKupYs3jhL3s6Kb.wGB2e4kS	\N	2022-12-03 03:09:56	2022-12-03 03:09:56	users/default.png	2	\N	\N	\N	\N
19	mic orson	orson@go.com	\N	$2y$10$TJgQ3xBdFAW6ARFtakX8teMic3DubMqQNBtbviwyEJmkxpNgeEwfu	\N	2022-12-03 03:35:34	2022-12-03 03:35:34	users/default.png	2	\N	\N	\N	\N
23	juanjo	juanjo@gmail.com	\N	$2y$10$y4OwW/9OPIMAMxiMbFVZWeumNnRQy1l6OStUO6XhZpEXvSJaiELCO	\N	2022-12-11 03:51:44	2022-12-11 03:51:45	users/default.png	2	\N	\N	\N	\N
30	MARTIN SEBASTIAN PEREZ RICO	martin.perez@unillanos.edu.co	\N	\N	\N	2022-12-20 23:18:17	2022-12-20 23:18:17	https://lh3.googleusercontent.com/a/AEdFTp6OWH9-NfVl98zQczsa07zygufOhn3KTTKT-dJIdA=s96-c	2	\N	101680878276362113857	google	\N
24	Daniel Martinez	danielxz211@gmail.com	\N	$2y$10$mW5p3uB5lNW74BaBfra1aOT7BpH7NruuPqgUC.iSqlwJP8JKop3OS	\N	2022-12-13 16:38:41	2022-12-13 16:38:41	users/default.png	2	\N	\N	\N	\N
25	Yeferson Yuberley Guerrero Castro	yeferson.guerrero@unillanos.edu.co	\N	$2y$10$rLHxc0K.pi5dAnIiyZn.JO9uegvD/2jopbPzYNC2zoauDeMj5ySY2	h02YygAc7UqnYRkITmWb961Qz0VvCwItvWsvsnS9J1cd4EPJrtE1bZrcaWyE	2022-12-13 18:33:12	2022-12-13 18:36:06	users/default.png	2	\N	\N	\N	\N
31	Huberto Cardenas	cardenas@gmail.com	\N	$2y$10$ruzdf5DPwoWExuBUZPISRu1aXw803y8ZM0W6UtRDD30kPpObw4Ql6	\N	2022-12-22 01:43:26	2022-12-22 01:43:27	users/default.png	2	\N	\N	\N	\N
3	JOHAN ESNEYDER CAICEDO GARCIA	johan.caicedo.garcia@unillanos.edu.co	\N	$2y$10$xjeiXmpUNIEpl1/2EILD/.z8jh1udlR69oOWVAv/cgGfHYAv1C0Hi	FfsNNTy1GgaqQg2vdX8rQKEtrKMI7Noq9qh2XMCZ9FrFW9IrnAdyiCqUGy7v	2022-12-02 03:44:33	2022-12-16 17:27:45	https://lh3.googleusercontent.com/a/ALm5wu1UX3ycaGn9jxE0bX9SmSwHJseAvBxAjW2pbD9l=s96-c	3	{"locale":"es"}	103965307239799941894	google	\N
32	juanita perez	juanita@gmail.com	\N	$2y$10$TZe21J.C8InIOCbfGfNhBeKJKrDoPccqbO1r62wUEi7sIBaD2952O	\N	2022-12-23 04:15:46	2022-12-23 04:15:46	users/default.png	2	\N	\N	\N	\N
34	Andres P	ackmilopamo@gmail.com	\N	\N	\N	2022-12-23 15:32:28	2022-12-23 15:32:28	https://lh3.googleusercontent.com/a/AEdFTp7ZICLa4uhXs-yhAFSHBy1skNGx30boQrlAVQue=s96-c	2	\N	110375477824350154838	google	\N
28	Hogar de perros	fundacion@gmail.com	\N	$2y$10$r7920DF/BD5SwKf7fhVvUOVu/mgi3zp2oLfnQpHzs6ahMAyoVUFVK	\N	2022-12-16 17:44:31	2022-12-16 17:45:01	users/default.png	3	{"locale":"es"}	\N	\N	1
33	Aurora Liliana Rodriguez	aurorarodriguez2691@gmail.com	\N	\N	\N	2022-12-23 07:27:29	2022-12-23 07:27:29	https://lh3.googleusercontent.com/a/AEdFTp7F-ybuYnmkGZdha-8rjUqemVO_pUv4MFXNni5u=s96-c	2	\N	100100442103637324189	google	\N
35	Daniel Steven Martinez Baquero	danielxz331@gmail.com	\N	\N	\N	2022-12-28 01:59:16	2022-12-28 01:59:17	https://lh3.googleusercontent.com/a/AEdFTp57MZVbA3ZY8Tg02iPaIubQgRK5irGQ-nNQup_tQA=s96-c	2	\N	115402722399808078035	google	\N
36	Marlon	marlon@gmail.com	\N	$2y$10$kuBYssnfEUslqXyqUrJy1euPYAmVUX6zPbsc.Iw1mmKkuD.e.cyJq	\N	2023-01-10 16:44:56	2023-01-10 16:44:56	users/default.png	2	\N	\N	\N	\N
37	Marlon Casallas	casallas.jaimes@gmail.com	\N	$2y$10$gwWyGe3Shf3BUYiC2GRUCuJocS9eU2b0IcYbfxx6zQRaxA4MVE9XO	\N	2023-01-10 20:31:54	2023-01-10 20:31:54	users/default.png	2	\N	\N	\N	\N
1	Admin	admin@admin.com	\N	$2y$10$NLRuXl8GzLRnJCEmmBEs4uZrlmPh3Plys953oPG/h4qwquXYSn.hK	kREKMQHVTjWMXKePPxSCrIytJdldfONIWG6z7627HeF5imJ4Ai57JExS80ju	2022-11-24 02:01:29	2022-12-12 23:30:45	users/December2022/4dMmmSJk8KQOxVTQsB7z.png	1	{"locale":"es"}	\N	\N	\N
8	Britney Lisbeth Pelaez Nimisica	britneynimisica@gmail.com	\N	$2y$10$erMk4s1zrPi1njS4tcs2fuCHihHMv4f9l8Yd5vHVjhkPAa7Jag.Ca	r7pXXv3hjk3YziOwYeRj13kKlByz044Xz6hK03IewuiCipbcLvioeChvPJzX	2022-12-02 15:56:15	2023-01-23 22:36:03	users/default.png	2	{"locale":"es"}	\N	\N	\N
40	juan pito rico	juanpitorico859@gmail.com	\N	\N	\N	2023-01-10 21:14:05	2023-01-10 21:14:05	https://lh3.googleusercontent.com/a/AEdFTp6ZlSGq0wdB2cqwD7YKi1h-ND-tFLIQe1ik9A_7=s96-c	2	\N	100068882577991374964	google	\N
44	Malron Casallas	luis.casallas@unillanos.edu.co	\N	$2y$10$ygVXJgID4Soq2CoigrpZ8uv6rw.uT0NL8Sii2BUurQTWW2ez2z81O	xDjbK51xLbGZ222vCfrXYZaWtctRpdxtX6Gn7Iyu1lNznlvUu1DeJpkVxR1l	2023-02-03 14:13:04	2023-02-03 14:19:54	users/default.png	2	\N	\N	\N	\N
\.


--
-- Name: campanias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.campanias_id_seq', 7, true);


--
-- Name: categories_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.categories_id_seq', 2, true);


--
-- Name: certificados_certificados_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.certificados_certificados_seq', 1, true);


--
-- Name: color_color_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.color_color_seq', 4, true);


--
-- Name: data_rows_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.data_rows_id_seq', 99, true);


--
-- Name: data_types_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.data_types_id_seq', 13, true);


--
-- Name: especie_especie_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.especie_especie_seq', 2, true);


--
-- Name: estado_estado_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.estado_estado_seq', 4, true);


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: fundaciones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.fundaciones_id_seq', 1, true);


--
-- Name: mascotas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.mascotas_id_seq', 27, true);


--
-- Name: mascotas_perdidas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.mascotas_perdidas_id_seq', 16, true);


--
-- Name: menu_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.menu_items_id_seq', 19, true);


--
-- Name: menus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.menus_id_seq', 1, true);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 50, true);


--
-- Name: pages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.pages_id_seq', 1, true);


--
-- Name: permissions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.permissions_id_seq', 70, true);


--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- Name: posts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.posts_id_seq', 4, true);


--
-- Name: raza_raza_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.raza_raza_seq', 8, true);


--
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.roles_id_seq', 3, true);


--
-- Name: servicios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.servicios_id_seq', 6, true);


--
-- Name: servicios_prestados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.servicios_prestados_id_seq', 2, true);


--
-- Name: settings_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.settings_id_seq', 10, true);


--
-- Name: translations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.translations_id_seq', 30, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 44, true);


--
-- Name: campanias campanias_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.campanias
    ADD CONSTRAINT campanias_pkey PRIMARY KEY (id);


--
-- Name: categories categories_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_pkey PRIMARY KEY (id);


--
-- Name: categories categories_slug_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_slug_unique UNIQUE (slug);


--
-- Name: certificados certificados_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.certificados
    ADD CONSTRAINT certificados_pkey PRIMARY KEY (certificados);


--
-- Name: color color_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.color
    ADD CONSTRAINT color_pkey PRIMARY KEY (color);


--
-- Name: data_rows data_rows_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_rows
    ADD CONSTRAINT data_rows_pkey PRIMARY KEY (id);


--
-- Name: data_types data_types_name_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_types
    ADD CONSTRAINT data_types_name_unique UNIQUE (name);


--
-- Name: data_types data_types_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_types
    ADD CONSTRAINT data_types_pkey PRIMARY KEY (id);


--
-- Name: data_types data_types_slug_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_types
    ADD CONSTRAINT data_types_slug_unique UNIQUE (slug);


--
-- Name: especie especie_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.especie
    ADD CONSTRAINT especie_pkey PRIMARY KEY (especie);


--
-- Name: estado estado_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.estado
    ADD CONSTRAINT estado_pkey PRIMARY KEY (estado);


--
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- Name: fundaciones fundaciones_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.fundaciones
    ADD CONSTRAINT fundaciones_pkey PRIMARY KEY (id);


--
-- Name: mascotas_perdidas mascotas_perdidas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas_perdidas
    ADD CONSTRAINT mascotas_perdidas_pkey PRIMARY KEY (id);


--
-- Name: mascotas mascotas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas
    ADD CONSTRAINT mascotas_pkey PRIMARY KEY (id);


--
-- Name: menu_items menu_items_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menu_items
    ADD CONSTRAINT menu_items_pkey PRIMARY KEY (id);


--
-- Name: menus menus_name_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_name_unique UNIQUE (name);


--
-- Name: menus menus_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menus
    ADD CONSTRAINT menus_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: pages pages_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pages
    ADD CONSTRAINT pages_pkey PRIMARY KEY (id);


--
-- Name: pages pages_slug_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pages
    ADD CONSTRAINT pages_slug_unique UNIQUE (slug);


--
-- Name: permission_role permission_role_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permission_role
    ADD CONSTRAINT permission_role_pkey PRIMARY KEY (permission_id, role_id);


--
-- Name: permissions permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- Name: posts posts_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.posts
    ADD CONSTRAINT posts_pkey PRIMARY KEY (id);


--
-- Name: posts posts_slug_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.posts
    ADD CONSTRAINT posts_slug_unique UNIQUE (slug);


--
-- Name: raza raza_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.raza
    ADD CONSTRAINT raza_pkey PRIMARY KEY (raza);


--
-- Name: roles roles_name_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_name_unique UNIQUE (name);


--
-- Name: roles roles_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- Name: servicios servicios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.servicios
    ADD CONSTRAINT servicios_pkey PRIMARY KEY (id);


--
-- Name: servicios_prestados servicios_prestados_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.servicios_prestados
    ADD CONSTRAINT servicios_prestados_pkey PRIMARY KEY (id);


--
-- Name: settings settings_key_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.settings
    ADD CONSTRAINT settings_key_unique UNIQUE (key);


--
-- Name: settings settings_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.settings
    ADD CONSTRAINT settings_pkey PRIMARY KEY (id);


--
-- Name: translations translations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.translations
    ADD CONSTRAINT translations_pkey PRIMARY KEY (id);


--
-- Name: translations translations_table_name_column_name_foreign_key_locale_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.translations
    ADD CONSTRAINT translations_table_name_column_name_foreign_key_locale_unique UNIQUE (table_name, column_name, foreign_key, locale);


--
-- Name: user_roles user_roles_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_roles
    ADD CONSTRAINT user_roles_pkey PRIMARY KEY (user_id, role_id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- Name: permission_role_permission_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX permission_role_permission_id_index ON public.permission_role USING btree (permission_id);


--
-- Name: permission_role_role_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX permission_role_role_id_index ON public.permission_role USING btree (role_id);


--
-- Name: permissions_key_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX permissions_key_index ON public.permissions USING btree (key);


--
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- Name: user_roles_role_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX user_roles_role_id_index ON public.user_roles USING btree (role_id);


--
-- Name: user_roles_user_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX user_roles_user_id_index ON public.user_roles USING btree (user_id);


--
-- Name: campanias campanias_id_fundacion_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.campanias
    ADD CONSTRAINT campanias_id_fundacion_foreign FOREIGN KEY (id_fundacion) REFERENCES public.fundaciones(id);


--
-- Name: categories categories_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.categories(id) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- Name: certifica certifica_id_fundacion_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.certifica
    ADD CONSTRAINT certifica_id_fundacion_foreign FOREIGN KEY (id_fundacion) REFERENCES public.fundaciones(id);


--
-- Name: certifica certifica_id_user_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.certifica
    ADD CONSTRAINT certifica_id_user_foreign FOREIGN KEY (id_user) REFERENCES public.users(id);


--
-- Name: certificados certificados_id_fundacion_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.certificados
    ADD CONSTRAINT certificados_id_fundacion_foreign FOREIGN KEY (id_fundacion) REFERENCES public.fundaciones(id);


--
-- Name: data_rows data_rows_data_type_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_rows
    ADD CONSTRAINT data_rows_data_type_id_foreign FOREIGN KEY (data_type_id) REFERENCES public.data_types(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: mascotas mascotas_color_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas
    ADD CONSTRAINT mascotas_color_foreign FOREIGN KEY (color) REFERENCES public.color(color);


--
-- Name: mascotas mascotas_especie_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas
    ADD CONSTRAINT mascotas_especie_foreign FOREIGN KEY (especie) REFERENCES public.especie(especie);


--
-- Name: mascotas mascotas_estado_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas
    ADD CONSTRAINT mascotas_estado_foreign FOREIGN KEY (estado) REFERENCES public.estado(estado);


--
-- Name: mascotas mascotas_id_fundacion_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas
    ADD CONSTRAINT mascotas_id_fundacion_foreign FOREIGN KEY (id_fundacion) REFERENCES public.fundaciones(id);


--
-- Name: mascotas_perdidas mascotas_perdidas_color_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas_perdidas
    ADD CONSTRAINT mascotas_perdidas_color_foreign FOREIGN KEY (color) REFERENCES public.color(color);


--
-- Name: mascotas_perdidas mascotas_perdidas_especie_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas_perdidas
    ADD CONSTRAINT mascotas_perdidas_especie_foreign FOREIGN KEY (especie) REFERENCES public.especie(especie);


--
-- Name: mascotas_perdidas mascotas_perdidas_estado_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas_perdidas
    ADD CONSTRAINT mascotas_perdidas_estado_foreign FOREIGN KEY (estado) REFERENCES public.estado(estado);


--
-- Name: mascotas_perdidas mascotas_perdidas_id_user_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas_perdidas
    ADD CONSTRAINT mascotas_perdidas_id_user_foreign FOREIGN KEY (id_user) REFERENCES public.users(id);


--
-- Name: mascotas_perdidas mascotas_perdidas_raza_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas_perdidas
    ADD CONSTRAINT mascotas_perdidas_raza_foreign FOREIGN KEY (raza) REFERENCES public.raza(raza);


--
-- Name: mascotas mascotas_raza_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mascotas
    ADD CONSTRAINT mascotas_raza_foreign FOREIGN KEY (raza) REFERENCES public.raza(raza);


--
-- Name: menu_items menu_items_menu_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.menu_items
    ADD CONSTRAINT menu_items_menu_id_foreign FOREIGN KEY (menu_id) REFERENCES public.menus(id) ON DELETE CASCADE;


--
-- Name: permission_role permission_role_permission_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permission_role
    ADD CONSTRAINT permission_role_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;


--
-- Name: permission_role permission_role_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permission_role
    ADD CONSTRAINT permission_role_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- Name: raza raza_especie_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.raza
    ADD CONSTRAINT raza_especie_foreign FOREIGN KEY (especie) REFERENCES public.especie(especie);


--
-- Name: servicios servicios_id_fundacion_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.servicios
    ADD CONSTRAINT servicios_id_fundacion_foreign FOREIGN KEY (id_fundacion) REFERENCES public.fundaciones(id);


--
-- Name: servicios_prestados servicios_prestados_id_fundacion_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.servicios_prestados
    ADD CONSTRAINT servicios_prestados_id_fundacion_foreign FOREIGN KEY (id_fundacion) REFERENCES public.fundaciones(id);


--
-- Name: user_roles user_roles_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_roles
    ADD CONSTRAINT user_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;


--
-- Name: user_roles user_roles_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_roles
    ADD CONSTRAINT user_roles_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: users users_id_fundacion_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_id_fundacion_foreign FOREIGN KEY (id_fundacion) REFERENCES public.fundaciones(id);


--
-- Name: users users_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id);


--
-- PostgreSQL database dump complete
--

