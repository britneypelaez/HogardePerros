--
-- PostgreSQL database dump
--

-- Dumped from database version 14.5
-- Dumped by pg_dump version 14.5

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
    CONSTRAINT pages_status_check CHECK (((status)::text = ANY ((ARRAY['ACTIVE'::character varying, 'INACTIVE'::character varying])::text[])))
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
    CONSTRAINT posts_status_check CHECK (((status)::text = ANY ((ARRAY['PUBLISHED'::character varying, 'DRAFT'::character varying, 'PENDING'::character varying])::text[])))
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
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    avatar character varying(255) DEFAULT 'users/default.png'::character varying,
    role_id bigint,
    settings text
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
-- Name: categories id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categories ALTER COLUMN id SET DEFAULT nextval('public.categories_id_seq'::regclass);


--
-- Name: data_rows id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_rows ALTER COLUMN id SET DEFAULT nextval('public.data_rows_id_seq'::regclass);


--
-- Name: data_types id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_types ALTER COLUMN id SET DEFAULT nextval('public.data_types_id_seq'::regclass);


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


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
-- Name: roles id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);


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
-- Data for Name: categories; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.categories (id, parent_id, "order", name, slug, created_at, updated_at) FROM stdin;
1	\N	1	Category 1	category-1	2022-11-24 02:01:29	2022-11-24 02:01:29
2	\N	1	Category 2	category-2	2022-11-24 02:01:29	2022-11-24 02:01:29
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
\.


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: menu_items; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.menu_items (id, menu_id, title, url, target, icon_class, color, parent_id, "order", created_at, updated_at, route, parameters) FROM stdin;
1	1	Dashboard		_self	voyager-boat	\N	\N	1	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.dashboard	\N
2	1	Media		_self	voyager-images	\N	\N	5	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.media.index	\N
3	1	Users		_self	voyager-person	\N	\N	3	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.users.index	\N
4	1	Roles		_self	voyager-lock	\N	\N	2	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.roles.index	\N
5	1	Tools		_self	voyager-tools	\N	\N	9	2022-11-24 02:01:29	2022-11-24 02:01:29	\N	\N
6	1	Menu Builder		_self	voyager-list	\N	5	10	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.menus.index	\N
7	1	Database		_self	voyager-data	\N	5	11	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.database.index	\N
8	1	Compass		_self	voyager-compass	\N	5	12	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.compass.index	\N
9	1	BREAD		_self	voyager-bread	\N	5	13	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.bread.index	\N
10	1	Settings		_self	voyager-settings	\N	\N	14	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.settings.index	\N
11	1	Categories		_self	voyager-categories	\N	\N	8	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.categories.index	\N
12	1	Posts		_self	voyager-news	\N	\N	6	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.posts.index	\N
13	1	Pages		_self	voyager-file-text	\N	\N	7	2022-11-24 02:01:29	2022-11-24 02:01:29	voyager.pages.index	\N
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
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.roles (id, name, display_name, created_at, updated_at) FROM stdin;
1	admin	Administrator	2022-11-24 02:01:29	2022-11-24 02:01:29
2	user	Normal User	2022-11-24 02:01:29	2022-11-24 02:01:29
\.


--
-- Data for Name: settings; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.settings (id, key, display_name, value, details, type, "order", "group") FROM stdin;
1	site.title	Site Title	Site Title		text	1	Site
2	site.description	Site Description	Site Description		text	2	Site
3	site.logo	Site Logo			image	3	Site
4	site.google_analytics_tracking_id	Google Analytics Tracking ID			text	4	Site
5	admin.bg_image	Admin Background Image			image	5	Admin
6	admin.title	Admin Title	Voyager		text	1	Admin
7	admin.description	Admin Description	Welcome to Voyager. The Missing Admin for Laravel		text	2	Admin
8	admin.loader	Admin Loader			image	3	Admin
9	admin.icon_image	Admin Icon Image			image	4	Admin
10	admin.google_analytics_client_id	Google Analytics Client ID (used for admin dashboard)			text	1	Admin
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

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, avatar, role_id, settings) FROM stdin;
1	Admin	admin@admin.com	\N	$2y$10$NLRuXl8GzLRnJCEmmBEs4uZrlmPh3Plys953oPG/h4qwquXYSn.hK	gPPgl4OAEzYIOdKcJi3c49LIUeApJhA8SjxR03tdFhafWjQ607wPxS3NeoMr	2022-11-24 02:01:29	2022-11-24 02:01:29	users/default.png	1	\N
\.


--
-- Name: categories_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.categories_id_seq', 2, true);


--
-- Name: data_rows_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.data_rows_id_seq', 55, true);


--
-- Name: data_types_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.data_types_id_seq', 6, true);


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: menu_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.menu_items_id_seq', 13, true);


--
-- Name: menus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.menus_id_seq', 1, true);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 28, true);


--
-- Name: pages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.pages_id_seq', 1, true);


--
-- Name: permissions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.permissions_id_seq', 40, true);


--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- Name: posts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.posts_id_seq', 4, true);


--
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.roles_id_seq', 2, true);


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

SELECT pg_catalog.setval('public.users_id_seq', 1, true);


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
-- Name: categories categories_parent_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_parent_id_foreign FOREIGN KEY (parent_id) REFERENCES public.categories(id) ON UPDATE CASCADE ON DELETE SET NULL;


--
-- Name: data_rows data_rows_data_type_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.data_rows
    ADD CONSTRAINT data_rows_data_type_id_foreign FOREIGN KEY (data_type_id) REFERENCES public.data_types(id) ON UPDATE CASCADE ON DELETE CASCADE;


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
-- Name: users users_role_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id);


--
-- PostgreSQL database dump complete
--

