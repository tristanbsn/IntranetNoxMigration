<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'fm_elfinder.configurator.default' => 'getFmElfinder_Configurator_DefaultService',
            'fm_elfinder.form.type' => 'getFmElfinder_Form_TypeService',
            'fm_elfinder.loader.default' => 'getFmElfinder_Loader_DefaultService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'ivory_ck_editor.config_manager' => 'getIvoryCkEditor_ConfigManagerService',
            'ivory_ck_editor.form.type' => 'getIvoryCkEditor_Form_TypeService',
            'ivory_ck_editor.plugin_manager' => 'getIvoryCkEditor_PluginManagerService',
            'ivory_ck_editor.styles_set_manager' => 'getIvoryCkEditor_StylesSetManagerService',
            'ivory_ck_editor.template_manager' => 'getIvoryCkEditor_TemplateManagerService',
            'ivory_ck_editor.templating.helper' => 'getIvoryCkEditor_Templating_HelperService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
            'kernel' => 'getKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'noxintranet_administration.majuserdb' => 'getNoxintranetAdministration_MajuserdbService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user.provider.concrete.main' => 'getSecurity_User_Provider_Concrete_MainService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.fm_elfinder_init' => 'getTwig_Extension_FmElfinderInitService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'fm_elfinder.configurator' => 'fm_elfinder.configurator.default',
            'fm_elfinder.loader' => 'fm_elfinder.loader.default',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        );
    }
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), (__DIR__.'/annotations'), false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($this->get('templating.loader'), '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 5 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), 85, NULL, true, NULL);
    }
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'intranet', 'user' => 'intranetadmin', 'password' => 'intranet', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), new \Doctrine\DBAL\Configuration(), $a, array());
    }
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = $this->get('annotation_reader');
        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'\\src\\NoxIntranet\\CommunicationBundle\\Entity'), 1 => ($this->targetDirs[3].'\\src\\NoxIntranet\\AdministrationBundle\\Entity'), 2 => ($this->targetDirs[3].'\\src\\NoxIntranet\\UserBundle\\Entity'), 3 => ($this->targetDirs[3].'\\src\\NoxIntranet\\SupportBundle\\Entity'), 4 => ($this->targetDirs[3].'\\src\\NoxIntranet\\RessourcesBundle\\Entity'), 5 => ($this->targetDirs[3].'\\src\\NoxIntranet\\SupportSIBundle\\Entity')));
        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'NoxIntranet\\CommunicationBundle\\Entity');
        $c->addDriver($b, 'NoxIntranet\\AdministrationBundle\\Entity');
        $c->addDriver($b, 'NoxIntranet\\UserBundle\\Entity');
        $c->addDriver($b, 'NoxIntranet\\SupportBundle\\Entity');
        $c->addDriver($b, 'NoxIntranet\\RessourcesBundle\\Entity');
        $c->addDriver($b, 'NoxIntranet\\SupportSIBundle\\Entity');
        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('NoxIntranetCommunicationBundle' => 'NoxIntranet\\CommunicationBundle\\Entity', 'NoxIntranetAdministrationBundle' => 'NoxIntranet\\AdministrationBundle\\Entity', 'NoxIntranetUserBundle' => 'NoxIntranet\\UserBundle\\Entity', 'NoxIntranetSupportBundle' => 'NoxIntranet\\SupportBundle\\Entity', 'NoxIntranetRessourcesBundle' => 'NoxIntranet\\RessourcesBundle\\Entity', 'NoxIntranetSupportSIBundle' => 'NoxIntranet\\SupportSIBundle\\Entity'));
        $d->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $d->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $d->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(false);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);
        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);
        return $instance;
    }
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();
        $instance->setNamespace('sf2orm_default_41bfefd1aad5305f0cad2bfed648f017214970c422ca22e8f7d68ab7f7de17fa');
        return $instance;
    }
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();
        $instance->setNamespace('sf2orm_default_41bfefd1aad5305f0cad2bfed648f017214970c422ca22e8f7d68ab7f7de17fa');
        return $instance;
    }
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();
        $instance->setNamespace('sf2orm_default_41bfefd1aad5305f0cad2bfed648f017214970c422ca22e8f7d68ab7f7de17fa');
        return $instance;
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        return $instance;
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getFmElfinder_Configurator_DefaultService()
    {
        return $this->services['fm_elfinder.configurator.default'] = new \FM\ElfinderBundle\Configuration\ElFinderConfigurationReader(array('instances' => array('ckeditor' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/ImagesPublication', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '10000M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'archives' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Archives', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'competences' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Competences', 'upload_allow' => array(0 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'newsSI' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/SI/NewsSI', 'upload_allow' => array(0 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'noxNews' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/NoxNews', 'upload_allow' => array(0 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'noxLetters' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/NoxLetters', 'upload_allow' => array(0 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'references' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/References', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'plaquettesInstitutionnelle' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/PlaquettesInstitutionnelle', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'presentationPowerPoint' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/PresentationPowerpoint', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'fichesMetier' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/FichesMetier', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'dossierTypeAppelOffre' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/DossierTypeAppelOffre', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'CVType' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/CVType', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'courriersType' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/CourriersType', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'papierEntete' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/PapierEntete', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'noxDansLaPresse' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/NoxDansLaPresse', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'logoNox' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/BanqueImages/LogoNox', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'cellesDuSiteInternet' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/BanqueImages/CellesDuSiteInternet', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'cellesDesSupports' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/BanqueImages/CellesDesSupports', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'trombinoscope' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/Trombinoscope', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'organigrammeStrategique' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeStrategique', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'organigrammeFonctionnel' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeFonctionnel', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'organigrammeAgence' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeAgence', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'annuaireAgences' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/AnnuaireAgences', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'CE' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/CE', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'CHSCT' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/CHSCT', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'noxALaConquete' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Marketing/NoxALaConquete', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'ilYAForcementPlusSimple' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Marketing/IlYAForcementPlusSimple', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'noxFournisseurDeTalents' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Marketing/NoxFournisseurDeTalents', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'nos5Valeurs' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Marketing/Nos5Valeurs', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg', 3 => 'image/gif', 4 => 'application/zip', 5 => 'audio/mpeg', 6 => 'text/csv', 7 => 'video/mp4', 8 => 'video/webm', 9 => 'application/pdf'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'attributes' => array(), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'plaquettesInstitutionnelleLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/PlaquettesInstitutionnelle', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'presentationPowerPointLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/PresentationPowerpoint', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'fichesMetierLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/FichesMetier', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'dossierTypeAppelOffreLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/DossierTypeAppelOffre', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'CVTypeLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/CVType', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'courriersTypeLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/CourriersType', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'papierEnteteLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/Supports/PapierEntete', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'noxDansLaPresseLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/NoxDansLaPresse', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'logoNoxLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/BanqueImages/LogoNox', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'cellesDuSiteInternetLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/BanqueImages/CellesDuSiteInternet', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'cellesDesSupportsLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Externe/BanqueImages/CellesDesSupports', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'trombinoscopeLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/Trombinoscope', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'organigrammeStrategiqueLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeStrategique', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'organigrammeFonctionnelLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeFonctionnel', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(0 => 'all'), 'upload_deny' => array(), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'organigrammeAgenceLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeAgence', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'annuaireAgencesLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/AnnuaireAgences', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'CELecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/CE', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'CHSCTLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Interne/CHSCT', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'noxALaConqueteLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Marketing/NoxALaConquete', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'ilYAForcementPlusSimpleLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Marketing/IlYAForcementPlusSimple', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'noxFournisseurDeTalentsLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Marketing/NoxFournisseurDeTalents', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/'), 'nos5ValeursLecture' => array('locale' => 'fr', 'editor' => 'ckeditor', 'fullscreen' => true, 'include_assets' => true, 'connector' => array('debug' => true, 'roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => 'uploads/Communication/Marketing/Nos5Valeurs', 'attributes' => array(0 => array('pattern' => '/^[^\\.].*/', 'read' => true, 'write' => false, 'locked' => true, 'hidden' => false)), 'upload_allow' => array(), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '100M', 'volume_id' => 0, 'start_path' => '', 'url' => '', 'alias' => '', 'mime_detect' => 'auto', 'mimefile' => '', 'img_lib' => 'auto', 'tmb_path' => '.tmb', 'tmb_path_mode' => 511, 'tmb_url' => '', 'tmb_size' => 48, 'tmb_crop' => true, 'tmb_bg_color' => '#ffffff', 'copy_overwrite' => true, 'copy_join' => true, 'copy_from' => true, 'copy_to' => true, 'upload_overwrite' => true, 'upload_order' => array(0 => 'deny', 1 => 'allow'), 'defaults' => array('read' => true, 'write' => true), 'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u', 'show_hidden' => false, 'disabled_commands' => array(), 'tree_deep' => 0, 'check_subfolders' => true, 'separator' => '\\', 'date_format' => 'j M Y H:i', 'time_format' => 'H:i', 'archive_mimes' => array(), 'archivers' => array(), 'flysystem' => array('enabled' => false, 'type' => ''), 'glide_url' => '', 'glide_key' => '', 'plugins' => array(), 'dropbox_settings' => array('enabled' => false), 'ftp_settings' => array('enabled' => false), 's3_settings' => array('enabled' => false))), 'binds' => array(), 'plugins' => array()), 'cors_support' => false, 'editor_template' => NULL, 'theme' => 'smoothness', 'tinymce_popup_path' => '', 'relative_path' => true, 'path_prefix' => '/')), 'configuration_provider' => 'fm_elfinder.configurator.default', 'assets_path' => '/assets', 'loader' => 'fm_elfinder.loader.default'), $this->get('request_stack'), $this);
    }
    protected function getFmElfinder_Form_TypeService()
    {
        return $this->services['fm_elfinder.form.type'] = new \FM\ElfinderBundle\Form\Type\ElFinderType();
    }
    protected function getFmElfinder_Loader_DefaultService()
    {
        return $this->services['fm_elfinder.loader.default'] = new \FM\ElfinderBundle\Loader\ElFinderLoader($this->get('fm_elfinder.configurator.default'));
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'elfinder' => 'fm_elfinder.form.type', 'ckeditor' => 'ivory_ck_editor.form.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators');
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'))));
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller($this->get('fos_js_routing.serializer'), $this->get('fos_js_routing.extractor'), array('enabled' => false), false);
    }
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor($this->get('router'), array(), __DIR__, array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'NoxIntranetCommunicationBundle' => 'NoxIntranet\\CommunicationBundle\\NoxIntranetCommunicationBundle', 'NoxIntranetMenuBundle' => 'NoxIntranet\\MenuBundle\\NoxIntranetMenuBundle', 'NoxIntranetAdministrationBundle' => 'NoxIntranet\\AdministrationBundle\\NoxIntranetAdministrationBundle', 'NoxIntranetUserBundle' => 'NoxIntranet\\UserBundle\\NoxIntranetUserBundle', 'NoxIntranetSupportBundle' => 'NoxIntranet\\SupportBundle\\NoxIntranetSupportBundle', 'NoxIntranetAccueilBundle' => 'NoxIntranet\\AccueilBundle\\NoxIntranetAccueilBundle', 'NoxIntranetRessourcesBundle' => 'NoxIntranet\\RessourcesBundle\\NoxIntranetRessourcesBundle', 'NoxIntranetSupportSIBundle' => 'NoxIntranet\\SupportSIBundle\\NoxIntranetSupportSIBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'NoxIntranetMajDBBundle' => 'NoxIntranet\\MajDBBundle\\NoxIntranetMajDBBundle', 'NoxIntranetVerifMajDBBundle' => 'NoxIntranet\\VerifMajDBBundle\\NoxIntranetVerifMajDBBundle', 'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle', 'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle'));
    }
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, false, $this->get('request_stack'));
        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');
        return $instance;
    }
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('request_stack'), false);
    }
    protected function getIvoryCkEditor_ConfigManagerService()
    {
        $this->services['ivory_ck_editor.config_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ConfigManager();
        $instance->setConfig('my_custom_config', array('toolbar' => array(0 => array(0 => 'NewPage', 1 => '-', 2 => 'DocProps', 3 => 'Preview'), 1 => array(0 => 'Cut', 1 => 'Copy', 2 => 'Paste', 3 => '-', 4 => 'Undo', 5 => 'Redo'), 2 => '/', 3 => array(0 => 'Bold', 1 => 'Italic', 2 => 'Underline', 3 => 'Strike', 4 => '-', 5 => 'Subscript', 6 => 'Superscript', 7 => 'RemoveFormat'), 4 => array(0 => 'FontSize', 1 => 'TextColor'), 5 => array(0 => 'Image')), 'filebrowserBrowseRoute' => 'elfinder', 'filebrowserBrowseRouteParameters' => array('instance' => 'ckeditor')));
        $instance->setDefaultConfig('my_custom_config');
        return $instance;
    }
    protected function getIvoryCkEditor_Form_TypeService()
    {
        return $this->services['ivory_ck_editor.form.type'] = new \Ivory\CKEditorBundle\Form\Type\CKEditorType($this->get('ivory_ck_editor.config_manager'), $this->get('ivory_ck_editor.plugin_manager'), $this->get('ivory_ck_editor.styles_set_manager'), $this->get('ivory_ck_editor.template_manager'));
    }
    protected function getIvoryCkEditor_PluginManagerService()
    {
        return $this->services['ivory_ck_editor.plugin_manager'] = new \Ivory\CKEditorBundle\Model\PluginManager();
    }
    protected function getIvoryCkEditor_StylesSetManagerService()
    {
        return $this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager();
    }
    protected function getIvoryCkEditor_TemplateManagerService()
    {
        return $this->services['ivory_ck_editor.template_manager'] = new \Ivory\CKEditorBundle\Model\TemplateManager();
    }
    protected function getIvoryCkEditor_Templating_HelperService()
    {
        return $this->services['ivory_ck_editor.templating.helper'] = new \Ivory\CKEditorBundle\Templating\CKEditorHelper($this);
    }
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension($this->get('ivory_ck_editor.templating.helper'));
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);
    }
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/prod.log'), 100, true, NULL);
    }
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getNoxintranetAdministration_MajuserdbService()
    {
        return $this->services['noxintranet_administration.majuserdb'] = new \NoxIntranet\AdministrationBundle\MajUserDB\NoxIntranetMajUserDB($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[2].'/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdUrlMatcher', 'strict_requirements' => NULL), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');
        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);
        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('NoxIntranet\\UserBundle\\Entity\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');
        $g = new \Symfony\Component\HttpFoundation\RequestMatcher('^/elfinder/archives');
        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/elfinder/competences');
        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/elfinder/references');
        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/elfinder/newsSI');
        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/elfinder/CE');
        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/elfinder/CHSCT');
        $m = new \Symfony\Component\HttpFoundation\RequestMatcher('^/efconnect');
        $n = new \Symfony\Component\HttpFoundation\RequestMatcher('^/elfinder');
        $o = new \Symfony\Component\HttpFoundation\RequestMatcher('^/administration/procedures');
        $p = new \Symfony\Component\HttpFoundation\RequestMatcher('^/administration/qualite');
        $q = new \Symfony\Component\HttpFoundation\RequestMatcher('^/administration/liens');
        $r = new \Symfony\Component\HttpFoundation\RequestMatcher('^/administration/communication');
        $s = new \Symfony\Component\HttpFoundation\RequestMatcher('^/administration');
        $t = new \Symfony\Component\HttpFoundation\RequestMatcher('^/communication');
        $u = new \Symfony\Component\HttpFoundation\RequestMatcher('^/ressources');
        $v = new \Symfony\Component\HttpFoundation\RequestMatcher('^/supportSI');
        $w = new \Symfony\Component\Security\Http\AccessMap();
        $w->add($g, array(0 => 'ROLE_ARCHIVES'), NULL);
        $w->add($h, array(0 => 'ROLE_COMPETENCES'), NULL);
        $w->add($i, array(0 => 'ROLE_REFERENCES'), NULL);
        $w->add($j, array(0 => 'ROLE_COMMUNICATION'), NULL);
        $w->add($k, array(0 => 'ROLE_CE'), NULL);
        $w->add($l, array(0 => 'ROLE_CHSCT'), NULL);
        $w->add($m, array(0 => 'ROLE_USER'), NULL);
        $w->add($n, array(0 => 'ROLE_USER'), NULL);
        $w->add($o, array(0 => 'ROLE_PROCEDURES'), NULL);
        $w->add($p, array(0 => 'ROLE_QUALITE'), NULL);
        $w->add($q, array(0 => 'ROLE_LIENS'), NULL);
        $w->add($r, array(0 => 'ROLE_COMMUNICATION'), NULL);
        $w->add($s, array(0 => 'ROLE_ADMIN', 1 => 'ROLE_REFERENCES', 2 => 'ROLE_COMPETENCES', 3 => 'ROLE_COMMUNICATION', 4 => 'ROLE_PROCEDURES', 5 => 'ROLE_CE', 6 => 'ROLE_CHSCT', 7 => 'ROLE_FAQ', 8 => 'ROLE_LIENS', 9 => 'ROLE_QUALITE'), NULL);
        $w->add($t, array(0 => 'ROLE_USER'), NULL);
        $w->add($u, array(0 => 'ROLE_USER'), NULL);
        $w->add($v, array(0 => 'ROLE_USER'), NULL);
        $x = new \Symfony\Component\Security\Http\HttpUtils($d, $d);
        $y = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $x, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($x, '/accueil'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => 'logout'));
        $y->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $z = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($x, array());
        $z->setOptions(array('login_path' => '/connexionRequise', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $z->setProviderKey('main');
        $aa = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $x, array(), $a);
        $aa->setOptions(array('login_path' => '/connexionRequise', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));
        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($w, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('security.user.provider.concrete.main')), 'main', $a, $c), 2 => $y, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $f, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $x, 'main', $z, $aa, array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $a, $c, NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '568d0dae0af2f4.53548131', $a, $f), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $w, $f)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $x, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $x, '/connexionRequise', false), '/accesInterdit', NULL, $a, false));
    }
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom((__DIR__.'/secure_random.seed'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');
        return $instance;
    }
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));
    }
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('noreply@groupe-nox.com');
        $a->setPassword('rG5xWk54');
        $a->setAuthMode(NULL);
        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));
        $instance->setHost('smtp.groupe-nox.com');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        return $instance;
    }
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));
        return $instance;
    }
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ar.xlf')), 'az' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.cs.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.de.xlf')), 'el' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.en.xlf')), 'es' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.es.xlf')), 'et' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fr.xlf'), 3 => ($this->targetDirs[3].'\\src\\NoxIntranet\\CommunicationBundle/Resources/translations\\messages.fr.xlf'), 4 => ($this->targetDirs[3].'\\src\\NoxIntranet\\MenuBundle/Resources/translations\\messages.fr.xlf'), 5 => ($this->targetDirs[3].'\\src\\NoxIntranet\\AdministrationBundle/Resources/translations\\messages.fr.xlf'), 6 => ($this->targetDirs[3].'\\src\\NoxIntranet\\UserBundle/Resources/translations\\messages.fr.xlf'), 7 => ($this->targetDirs[3].'\\src\\NoxIntranet\\SupportBundle/Resources/translations\\messages.fr.xlf'), 8 => ($this->targetDirs[3].'\\src\\NoxIntranet\\AccueilBundle/Resources/translations\\messages.fr.xlf'), 9 => ($this->targetDirs[3].'\\src\\NoxIntranet\\RessourcesBundle/Resources/translations\\messages.fr.xlf'), 10 => ($this->targetDirs[3].'\\src\\NoxIntranet\\SupportSIBundle/Resources/translations\\messages.fr.xlf'), 11 => ($this->targetDirs[3].'\\src\\NoxIntranet\\MajDBBundle/Resources/translations\\messages.fr.xlf'), 12 => ($this->targetDirs[3].'\\src\\NoxIntranet\\VerifMajDBBundle/Resources/translations\\messages.fr.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.it.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lt.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.nl.xlf')), 'no' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pl.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ru.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sl.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sv.xlf')), 'th' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.th.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.tr.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.zh_CN.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ua.xlf')))), array());
        $instance->setFallbackLocales(array(0 => 'fr'));
        return $instance;
    }
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator.default'), $this->get('request_stack'));
    }
    protected function getTwigService()
    {
        $a = $this->get('request_stack');
        $b = $this->get('fragment.handler');
        $c = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a);
        $d = new \Symfony\Bridge\Twig\AppVariable();
        $d->setEnvironment('prod');
        $d->setDebug(false);
        if ($this->has('security.token_storage')) {
            $d->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $d->setRequestStack($a);
        }
        $d->setContainer($this);
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'filename', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $c));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($b));
        $instance->addExtension($c);
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig', 1 => 'FMElfinderBundle:Form:elfinder_widget.html.twig', 2 => 'form_div_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('twig.extension.fm_elfinder_init'));
        $instance->addExtension($this->get('ivory_ck_editor.twig_extension'));
        $instance->addGlobal('app', $d);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);
        return $instance;
    }
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTwig_Extension_FmElfinderInitService()
    {
        return $this->services['twig.extension.fm_elfinder_init'] = new \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension($this->get('twig'));
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\CommunicationBundle/Resources/views'), 'NoxIntranetCommunication');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\MenuBundle/Resources/views'), 'NoxIntranetMenu');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\AdministrationBundle/Resources/views'), 'NoxIntranetAdministration');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\UserBundle/Resources/views'), 'NoxIntranetUser');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\SupportBundle/Resources/views'), 'NoxIntranetSupport');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\AccueilBundle/Resources/views'), 'NoxIntranetAccueil');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\RessourcesBundle/Resources/views'), 'NoxIntranetRessources');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\SupportSIBundle/Resources/views'), 'NoxIntranetSupportSI');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\MajDBBundle/Resources/views'), 'NoxIntranetMajDB');
        $instance->addPath(($this->targetDirs[3].'\\src\\NoxIntranet\\VerifMajDBBundle/Resources/views'), 'NoxIntranetVerifMajDB');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\helios-ag\\fm-elfinder-bundle/Resources/views'), 'FMElfinder');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle/Resources/views'), 'IvoryCKEditor');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));
        return $instance;
    }
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('cac79ed1075f393421bc6a36836164066162caab');
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();
        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));
        return $instance;
    }
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), false);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.role_hierarchy');
        $b = $this->get('security.authentication.trust_resolver');
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b)), 'affirmative', false, true);
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.main'), new \Symfony\Component\Security\Core\User\UserChecker(), 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('568d0dae0af2f4.53548131')), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->registerListener('main', 'logout', 'logout', '_csrf_token', NULL);
        return $instance;
    }
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_USER' => array(), 'ROLE_REFERENCES' => array(0 => 'ROLE_USER'), 'ROLE_LIENS' => array(0 => 'ROLE_USER'), 'ROLE_FAQ' => array(0 => 'ROLE_USER'), 'ROLE_CE' => array(0 => 'ROLE_USER', 1 => 'ROLE_COMMUNICATION'), 'ROLE_CHSCT' => array(0 => 'ROLE_USER', 1 => 'ROLE_COMMUNICATION'), 'ROLE_QUALITE' => array(0 => 'ROLE_USER'), 'ROLE_COMPETENCES' => array(0 => 'ROLE_USER'), 'ROLE_COMMUNICATION' => array(0 => 'ROLE_USER'), 'ROLE_PROCEDURES' => array(0 => 'ROLE_USER'), 'ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_PROCEDURES', 2 => 'ROLE_COMMUNICATION', 3 => 'ROLE_COMPETENCES', 4 => 'ROLE_REFERENCES', 5 => 'ROLE_LIENS', 6 => 'ROLE_CE', 7 => 'ROLE_CHSCT', 8 => 'ROLE_QUALITE', 9 => 'ROLE_FAQ'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH')));
    }
    protected function getSecurity_User_Provider_Concrete_MainService()
    {
        return $this->services['security.user.provider.concrete.main'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider($this->get('doctrine'), 'NoxIntranetUserBundle:User', 'username', NULL);
    }
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'ap_',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'\\logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'NoxIntranetCommunicationBundle' => 'NoxIntranet\\CommunicationBundle\\NoxIntranetCommunicationBundle',
                'NoxIntranetMenuBundle' => 'NoxIntranet\\MenuBundle\\NoxIntranetMenuBundle',
                'NoxIntranetAdministrationBundle' => 'NoxIntranet\\AdministrationBundle\\NoxIntranetAdministrationBundle',
                'NoxIntranetUserBundle' => 'NoxIntranet\\UserBundle\\NoxIntranetUserBundle',
                'NoxIntranetSupportBundle' => 'NoxIntranet\\SupportBundle\\NoxIntranetSupportBundle',
                'NoxIntranetAccueilBundle' => 'NoxIntranet\\AccueilBundle\\NoxIntranetAccueilBundle',
                'NoxIntranetRessourcesBundle' => 'NoxIntranet\\RessourcesBundle\\NoxIntranetRessourcesBundle',
                'NoxIntranetSupportSIBundle' => 'NoxIntranet\\SupportSIBundle\\NoxIntranetSupportSIBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'NoxIntranetMajDBBundle' => 'NoxIntranet\\MajDBBundle\\NoxIntranetMajDBBundle',
                'NoxIntranetVerifMajDBBundle' => 'NoxIntranet\\VerifMajDBBundle\\NoxIntranetVerifMajDBBundle',
                'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'intranet',
            'database_user' => 'intranetadmin',
            'database_password' => 'intranet',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'smtp.groupe-nox.com',
            'mailer_user' => 'noreply@groupe-nox.com',
            'mailer_password' => 'rG5xWk54',
            'secret' => 'cac79ed1075f393421bc6a36836164066162caab',
            'locale' => 'fr',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'cac79ed1075f393421bc6a36836164066162caab',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(
            ),
            'kernel.trusted_proxies' => array(
            ),
            'kernel.default_locale' => 'fr',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => false,
            'data_collector.templates' => array(
            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdUrlMatcher',
            'router.options.generator.cache_class' => 'appProdUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/config/routing.yml'),
            'router.cache_class_prefix' => 'appProd',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => 0,
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => '/accesInterdit',
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_USER' => array(
                ),
                'ROLE_REFERENCES' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_LIENS' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_FAQ' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_CE' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_COMMUNICATION',
                ),
                'ROLE_CHSCT' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_COMMUNICATION',
                ),
                'ROLE_QUALITE' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_COMPETENCES' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_COMMUNICATION' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_PROCEDURES' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_PROCEDURES',
                    2 => 'ROLE_COMMUNICATION',
                    3 => 'ROLE_COMPETENCES',
                    4 => 'ROLE_REFERENCES',
                    5 => 'ROLE_LIENS',
                    6 => 'ROLE_CE',
                    7 => 'ROLE_CHSCT',
                    8 => 'ROLE_QUALITE',
                    9 => 'ROLE_FAQ',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig',
                1 => 'FMElfinderBundle:Form:elfinder_widget.html.twig',
                2 => 'form_div_layout.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.swift_mailer.handlers' => array(
            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'smtp.groupe-nox.com',
            'swiftmailer.mailer.default.transport.smtp.username' => 'noreply@groupe-nox.com',
            'swiftmailer.mailer.default.transport.smtp.password' => 'rG5xWk54',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[2].'/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/../web'),
            'assetic.variables' => array(
            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(
            ),
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.cache_control' => array(
                'enabled' => false,
            ),
            'fm_elfinder.loader' => 'FM\\ElfinderBundle\\Loader\\ElFinderLoader',
            'fm_elfinder.configurator' => 'FM\\ElfinderBundle\\Configuration\\ElFinderConfigurationReader',
            'elfinder.form.type.class' => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType',
            'fm_elfinder' => array(
                'instances' => array(
                    'ckeditor' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/ImagesPublication',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '10000M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'archives' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Archives',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'competences' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Competences',
                                    'upload_allow' => array(
                                        0 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'newsSI' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/SI/NewsSI',
                                    'upload_allow' => array(
                                        0 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'noxNews' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/NoxNews',
                                    'upload_allow' => array(
                                        0 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'noxLetters' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/NoxLetters',
                                    'upload_allow' => array(
                                        0 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'references' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/References',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'plaquettesInstitutionnelle' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/PlaquettesInstitutionnelle',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'presentationPowerPoint' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/PresentationPowerpoint',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'fichesMetier' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/FichesMetier',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'dossierTypeAppelOffre' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/DossierTypeAppelOffre',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'CVType' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/CVType',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'courriersType' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/CourriersType',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'papierEntete' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/PapierEntete',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'noxDansLaPresse' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/NoxDansLaPresse',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'logoNox' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/BanqueImages/LogoNox',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'cellesDuSiteInternet' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/BanqueImages/CellesDuSiteInternet',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'cellesDesSupports' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/BanqueImages/CellesDesSupports',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'trombinoscope' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/Trombinoscope',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'organigrammeStrategique' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeStrategique',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'organigrammeFonctionnel' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeFonctionnel',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'organigrammeAgence' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeAgence',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'annuaireAgences' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/AnnuaireAgences',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'CE' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/CE',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'CHSCT' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/CHSCT',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'noxALaConquete' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Marketing/NoxALaConquete',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'ilYAForcementPlusSimple' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Marketing/IlYAForcementPlusSimple',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'noxFournisseurDeTalents' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Marketing/NoxFournisseurDeTalents',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'nos5Valeurs' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Marketing/Nos5Valeurs',
                                    'upload_allow' => array(
                                        0 => 'image/png',
                                        1 => 'image/jpg',
                                        2 => 'image/jpeg',
                                        3 => 'image/gif',
                                        4 => 'application/zip',
                                        5 => 'audio/mpeg',
                                        6 => 'text/csv',
                                        7 => 'video/mp4',
                                        8 => 'video/webm',
                                        9 => 'application/pdf',
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'attributes' => array(
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'plaquettesInstitutionnelleLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/PlaquettesInstitutionnelle',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'presentationPowerPointLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/PresentationPowerpoint',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'fichesMetierLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/FichesMetier',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'dossierTypeAppelOffreLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/DossierTypeAppelOffre',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'CVTypeLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/CVType',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'courriersTypeLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/CourriersType',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'papierEnteteLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/Supports/PapierEntete',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'noxDansLaPresseLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/NoxDansLaPresse',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'logoNoxLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/BanqueImages/LogoNox',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'cellesDuSiteInternetLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/BanqueImages/CellesDuSiteInternet',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'cellesDesSupportsLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Externe/BanqueImages/CellesDesSupports',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'trombinoscopeLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/Trombinoscope',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'organigrammeStrategiqueLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeStrategique',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'organigrammeFonctionnelLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeFonctionnel',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                        0 => 'all',
                                    ),
                                    'upload_deny' => array(
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'organigrammeAgenceLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/Organigrammes/OrganigrammeAgence',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'annuaireAgencesLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/AnnuaireAgences',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'CELecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/CE',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'CHSCTLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Interne/CHSCT',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'noxALaConqueteLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Marketing/NoxALaConquete',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'ilYAForcementPlusSimpleLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Marketing/IlYAForcementPlusSimple',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'noxFournisseurDeTalentsLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Marketing/NoxFournisseurDeTalents',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                    'nos5ValeursLecture' => array(
                        'locale' => 'fr',
                        'editor' => 'ckeditor',
                        'fullscreen' => true,
                        'include_assets' => true,
                        'connector' => array(
                            'debug' => true,
                            'roots' => array(
                                'uploads' => array(
                                    'driver' => 'LocalFileSystem',
                                    'path' => 'uploads/Communication/Marketing/Nos5Valeurs',
                                    'attributes' => array(
                                        0 => array(
                                            'pattern' => '/^[^\\.].*/',
                                            'read' => true,
                                            'write' => false,
                                            'locked' => true,
                                            'hidden' => false,
                                        ),
                                    ),
                                    'upload_allow' => array(
                                    ),
                                    'upload_deny' => array(
                                        0 => 'all',
                                    ),
                                    'upload_max_size' => '100M',
                                    'volume_id' => 0,
                                    'start_path' => '',
                                    'url' => '',
                                    'alias' => '',
                                    'mime_detect' => 'auto',
                                    'mimefile' => '',
                                    'img_lib' => 'auto',
                                    'tmb_path' => '.tmb',
                                    'tmb_path_mode' => 511,
                                    'tmb_url' => '',
                                    'tmb_size' => 48,
                                    'tmb_crop' => true,
                                    'tmb_bg_color' => '#ffffff',
                                    'copy_overwrite' => true,
                                    'copy_join' => true,
                                    'copy_from' => true,
                                    'copy_to' => true,
                                    'upload_overwrite' => true,
                                    'upload_order' => array(
                                        0 => 'deny',
                                        1 => 'allow',
                                    ),
                                    'defaults' => array(
                                        'read' => true,
                                        'write' => true,
                                    ),
                                    'accepted_name' => '/^\\w[\\w\\s\\.\\%\\-]*$/u',
                                    'show_hidden' => false,
                                    'disabled_commands' => array(
                                    ),
                                    'tree_deep' => 0,
                                    'check_subfolders' => true,
                                    'separator' => '\\',
                                    'date_format' => 'j M Y H:i',
                                    'time_format' => 'H:i',
                                    'archive_mimes' => array(
                                    ),
                                    'archivers' => array(
                                    ),
                                    'flysystem' => array(
                                        'enabled' => false,
                                        'type' => '',
                                    ),
                                    'glide_url' => '',
                                    'glide_key' => '',
                                    'plugins' => array(
                                    ),
                                    'dropbox_settings' => array(
                                        'enabled' => false,
                                    ),
                                    'ftp_settings' => array(
                                        'enabled' => false,
                                    ),
                                    's3_settings' => array(
                                        'enabled' => false,
                                    ),
                                ),
                            ),
                            'binds' => array(
                            ),
                            'plugins' => array(
                            ),
                        ),
                        'cors_support' => false,
                        'editor_template' => NULL,
                        'theme' => 'smoothness',
                        'tinymce_popup_path' => '',
                        'relative_path' => true,
                        'path_prefix' => '/',
                    ),
                ),
                'configuration_provider' => 'fm_elfinder.configurator.default',
                'assets_path' => '/assets',
                'loader' => 'fm_elfinder.loader.default',
            ),
            'console.command.ids' => array(
            ),
        );
    }
}
