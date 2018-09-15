<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc37342d6ccb37f9b966782650de7b1bb
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5a29f2abde115bb0e1aa502d691e2e50' => __DIR__ . '/..' . '/gerardojbaez/money/src/helpers.php',
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TypistTech\\Imposter\\Plugin\\' => 27,
            'TypistTech\\Imposter\\' => 20,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'G' => 
        array (
            'Gerardojbaez\\Money\\' => 19,
        ),
        'D' => 
        array (
            'DeepCopy\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TypistTech\\Imposter\\Plugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter-plugin/src',
        ),
        'TypistTech\\Imposter\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'Gerardojbaez\\Money\\' => 
        array (
            0 => __DIR__ . '/..' . '/gerardojbaez/money/src',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
    );

    public static $classMap = array (
        'Gamajo_Template_Loader' => __DIR__ . '/..' . '/gamajo/template-loader/class-gamajo-template-loader.php',
        'League\\Flysystem\\AdapterInterface' => __DIR__ . '/..' . '/league/flysystem/src/AdapterInterface.php',
        'League\\Flysystem\\Adapter\\AbstractAdapter' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/AbstractAdapter.php',
        'League\\Flysystem\\Adapter\\AbstractFtpAdapter' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/AbstractFtpAdapter.php',
        'League\\Flysystem\\Adapter\\CanOverwriteFiles' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/CanOverwriteFiles.php',
        'League\\Flysystem\\Adapter\\Ftp' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Ftp.php',
        'League\\Flysystem\\Adapter\\Ftpd' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Ftpd.php',
        'League\\Flysystem\\Adapter\\Local' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Local.php',
        'League\\Flysystem\\Adapter\\NullAdapter' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/NullAdapter.php',
        'League\\Flysystem\\Adapter\\Polyfill\\NotSupportingVisibilityTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/NotSupportingVisibilityTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedCopyTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedCopyTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedReadingTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedReadingTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedWritingTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedWritingTrait.php',
        'League\\Flysystem\\Adapter\\SynologyFtp' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/SynologyFtp.php',
        'League\\Flysystem\\Config' => __DIR__ . '/..' . '/league/flysystem/src/Config.php',
        'League\\Flysystem\\ConfigAwareTrait' => __DIR__ . '/..' . '/league/flysystem/src/ConfigAwareTrait.php',
        'League\\Flysystem\\Directory' => __DIR__ . '/..' . '/league/flysystem/src/Directory.php',
        'League\\Flysystem\\Exception' => __DIR__ . '/..' . '/league/flysystem/src/Exception.php',
        'League\\Flysystem\\File' => __DIR__ . '/..' . '/league/flysystem/src/File.php',
        'League\\Flysystem\\FileExistsException' => __DIR__ . '/..' . '/league/flysystem/src/FileExistsException.php',
        'League\\Flysystem\\FileNotFoundException' => __DIR__ . '/..' . '/league/flysystem/src/FileNotFoundException.php',
        'League\\Flysystem\\Filesystem' => __DIR__ . '/..' . '/league/flysystem/src/Filesystem.php',
        'League\\Flysystem\\FilesystemInterface' => __DIR__ . '/..' . '/league/flysystem/src/FilesystemInterface.php',
        'League\\Flysystem\\FilesystemNotFoundException' => __DIR__ . '/..' . '/league/flysystem/src/FilesystemNotFoundException.php',
        'League\\Flysystem\\Handler' => __DIR__ . '/..' . '/league/flysystem/src/Handler.php',
        'League\\Flysystem\\MountManager' => __DIR__ . '/..' . '/league/flysystem/src/MountManager.php',
        'League\\Flysystem\\NotSupportedException' => __DIR__ . '/..' . '/league/flysystem/src/NotSupportedException.php',
        'League\\Flysystem\\PluginInterface' => __DIR__ . '/..' . '/league/flysystem/src/PluginInterface.php',
        'League\\Flysystem\\Plugin\\AbstractPlugin' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/AbstractPlugin.php',
        'League\\Flysystem\\Plugin\\EmptyDir' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/EmptyDir.php',
        'League\\Flysystem\\Plugin\\ForcedCopy' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ForcedCopy.php',
        'League\\Flysystem\\Plugin\\ForcedRename' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ForcedRename.php',
        'League\\Flysystem\\Plugin\\GetWithMetadata' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/GetWithMetadata.php',
        'League\\Flysystem\\Plugin\\ListFiles' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ListFiles.php',
        'League\\Flysystem\\Plugin\\ListPaths' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ListPaths.php',
        'League\\Flysystem\\Plugin\\ListWith' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ListWith.php',
        'League\\Flysystem\\Plugin\\PluggableTrait' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/PluggableTrait.php',
        'League\\Flysystem\\Plugin\\PluginNotFoundException' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/PluginNotFoundException.php',
        'League\\Flysystem\\ReadInterface' => __DIR__ . '/..' . '/league/flysystem/src/ReadInterface.php',
        'League\\Flysystem\\RootViolationException' => __DIR__ . '/..' . '/league/flysystem/src/RootViolationException.php',
        'League\\Flysystem\\SafeStorage' => __DIR__ . '/..' . '/league/flysystem/src/SafeStorage.php',
        'League\\Flysystem\\UnreadableFileException' => __DIR__ . '/..' . '/league/flysystem/src/UnreadableFileException.php',
        'League\\Flysystem\\Util' => __DIR__ . '/..' . '/league/flysystem/src/Util.php',
        'League\\Flysystem\\Util\\ContentListingFormatter' => __DIR__ . '/..' . '/league/flysystem/src/Util/ContentListingFormatter.php',
        'League\\Flysystem\\Util\\MimeType' => __DIR__ . '/..' . '/league/flysystem/src/Util/MimeType.php',
        'League\\Flysystem\\Util\\StreamHasher' => __DIR__ . '/..' . '/league/flysystem/src/Util/StreamHasher.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Symfony\\Component\\Console\\Application' => __DIR__ . '/..' . '/symfony/console/Application.php',
        'Symfony\\Component\\Console\\CommandLoader\\CommandLoaderInterface' => __DIR__ . '/..' . '/symfony/console/CommandLoader/CommandLoaderInterface.php',
        'Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/ContainerCommandLoader.php',
        'Symfony\\Component\\Console\\CommandLoader\\FactoryCommandLoader' => __DIR__ . '/..' . '/symfony/console/CommandLoader/FactoryCommandLoader.php',
        'Symfony\\Component\\Console\\Command\\Command' => __DIR__ . '/..' . '/symfony/console/Command/Command.php',
        'Symfony\\Component\\Console\\Command\\HelpCommand' => __DIR__ . '/..' . '/symfony/console/Command/HelpCommand.php',
        'Symfony\\Component\\Console\\Command\\ListCommand' => __DIR__ . '/..' . '/symfony/console/Command/ListCommand.php',
        'Symfony\\Component\\Console\\Command\\LockableTrait' => __DIR__ . '/..' . '/symfony/console/Command/LockableTrait.php',
        'Symfony\\Component\\Console\\ConsoleEvents' => __DIR__ . '/..' . '/symfony/console/ConsoleEvents.php',
        'Symfony\\Component\\Console\\DependencyInjection\\AddConsoleCommandPass' => __DIR__ . '/..' . '/symfony/console/DependencyInjection/AddConsoleCommandPass.php',
        'Symfony\\Component\\Console\\Descriptor\\ApplicationDescription' => __DIR__ . '/..' . '/symfony/console/Descriptor/ApplicationDescription.php',
        'Symfony\\Component\\Console\\Descriptor\\Descriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/Descriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\DescriptorInterface' => __DIR__ . '/..' . '/symfony/console/Descriptor/DescriptorInterface.php',
        'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/JsonDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/MarkdownDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\TextDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/TextDescriptor.php',
        'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor' => __DIR__ . '/..' . '/symfony/console/Descriptor/XmlDescriptor.php',
        'Symfony\\Component\\Console\\EventListener\\ErrorListener' => __DIR__ . '/..' . '/symfony/console/EventListener/ErrorListener.php',
        'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleCommandEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleErrorEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleExceptionEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleExceptionEvent.php',
        'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => __DIR__ . '/..' . '/symfony/console/Event/ConsoleTerminateEvent.php',
        'Symfony\\Component\\Console\\Exception\\CommandNotFoundException' => __DIR__ . '/..' . '/symfony/console/Exception/CommandNotFoundException.php',
        'Symfony\\Component\\Console\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/console/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Console\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Console\\Exception\\InvalidOptionException' => __DIR__ . '/..' . '/symfony/console/Exception/InvalidOptionException.php',
        'Symfony\\Component\\Console\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/console/Exception/LogicException.php',
        'Symfony\\Component\\Console\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/console/Exception/RuntimeException.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatter' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatter.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyle.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleInterface' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleInterface.php',
        'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack' => __DIR__ . '/..' . '/symfony/console/Formatter/OutputFormatterStyleStack.php',
        'Symfony\\Component\\Console\\Helper\\DebugFormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DebugFormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\DescriptorHelper' => __DIR__ . '/..' . '/symfony/console/Helper/DescriptorHelper.php',
        'Symfony\\Component\\Console\\Helper\\FormatterHelper' => __DIR__ . '/..' . '/symfony/console/Helper/FormatterHelper.php',
        'Symfony\\Component\\Console\\Helper\\Helper' => __DIR__ . '/..' . '/symfony/console/Helper/Helper.php',
        'Symfony\\Component\\Console\\Helper\\HelperInterface' => __DIR__ . '/..' . '/symfony/console/Helper/HelperInterface.php',
        'Symfony\\Component\\Console\\Helper\\HelperSet' => __DIR__ . '/..' . '/symfony/console/Helper/HelperSet.php',
        'Symfony\\Component\\Console\\Helper\\InputAwareHelper' => __DIR__ . '/..' . '/symfony/console/Helper/InputAwareHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProcessHelper' => __DIR__ . '/..' . '/symfony/console/Helper/ProcessHelper.php',
        'Symfony\\Component\\Console\\Helper\\ProgressBar' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressBar.php',
        'Symfony\\Component\\Console\\Helper\\ProgressIndicator' => __DIR__ . '/..' . '/symfony/console/Helper/ProgressIndicator.php',
        'Symfony\\Component\\Console\\Helper\\QuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/QuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper' => __DIR__ . '/..' . '/symfony/console/Helper/SymfonyQuestionHelper.php',
        'Symfony\\Component\\Console\\Helper\\Table' => __DIR__ . '/..' . '/symfony/console/Helper/Table.php',
        'Symfony\\Component\\Console\\Helper\\TableCell' => __DIR__ . '/..' . '/symfony/console/Helper/TableCell.php',
        'Symfony\\Component\\Console\\Helper\\TableSeparator' => __DIR__ . '/..' . '/symfony/console/Helper/TableSeparator.php',
        'Symfony\\Component\\Console\\Helper\\TableStyle' => __DIR__ . '/..' . '/symfony/console/Helper/TableStyle.php',
        'Symfony\\Component\\Console\\Input\\ArgvInput' => __DIR__ . '/..' . '/symfony/console/Input/ArgvInput.php',
        'Symfony\\Component\\Console\\Input\\ArrayInput' => __DIR__ . '/..' . '/symfony/console/Input/ArrayInput.php',
        'Symfony\\Component\\Console\\Input\\Input' => __DIR__ . '/..' . '/symfony/console/Input/Input.php',
        'Symfony\\Component\\Console\\Input\\InputArgument' => __DIR__ . '/..' . '/symfony/console/Input/InputArgument.php',
        'Symfony\\Component\\Console\\Input\\InputAwareInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputAwareInterface.php',
        'Symfony\\Component\\Console\\Input\\InputDefinition' => __DIR__ . '/..' . '/symfony/console/Input/InputDefinition.php',
        'Symfony\\Component\\Console\\Input\\InputInterface' => __DIR__ . '/..' . '/symfony/console/Input/InputInterface.php',
        'Symfony\\Component\\Console\\Input\\InputOption' => __DIR__ . '/..' . '/symfony/console/Input/InputOption.php',
        'Symfony\\Component\\Console\\Input\\StreamableInputInterface' => __DIR__ . '/..' . '/symfony/console/Input/StreamableInputInterface.php',
        'Symfony\\Component\\Console\\Input\\StringInput' => __DIR__ . '/..' . '/symfony/console/Input/StringInput.php',
        'Symfony\\Component\\Console\\Logger\\ConsoleLogger' => __DIR__ . '/..' . '/symfony/console/Logger/ConsoleLogger.php',
        'Symfony\\Component\\Console\\Output\\BufferedOutput' => __DIR__ . '/..' . '/symfony/console/Output/BufferedOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutput' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutput.php',
        'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/ConsoleOutputInterface.php',
        'Symfony\\Component\\Console\\Output\\NullOutput' => __DIR__ . '/..' . '/symfony/console/Output/NullOutput.php',
        'Symfony\\Component\\Console\\Output\\Output' => __DIR__ . '/..' . '/symfony/console/Output/Output.php',
        'Symfony\\Component\\Console\\Output\\OutputInterface' => __DIR__ . '/..' . '/symfony/console/Output/OutputInterface.php',
        'Symfony\\Component\\Console\\Output\\StreamOutput' => __DIR__ . '/..' . '/symfony/console/Output/StreamOutput.php',
        'Symfony\\Component\\Console\\Question\\ChoiceQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ChoiceQuestion.php',
        'Symfony\\Component\\Console\\Question\\ConfirmationQuestion' => __DIR__ . '/..' . '/symfony/console/Question/ConfirmationQuestion.php',
        'Symfony\\Component\\Console\\Question\\Question' => __DIR__ . '/..' . '/symfony/console/Question/Question.php',
        'Symfony\\Component\\Console\\Style\\OutputStyle' => __DIR__ . '/..' . '/symfony/console/Style/OutputStyle.php',
        'Symfony\\Component\\Console\\Style\\StyleInterface' => __DIR__ . '/..' . '/symfony/console/Style/StyleInterface.php',
        'Symfony\\Component\\Console\\Style\\SymfonyStyle' => __DIR__ . '/..' . '/symfony/console/Style/SymfonyStyle.php',
        'Symfony\\Component\\Console\\Terminal' => __DIR__ . '/..' . '/symfony/console/Terminal.php',
        'Symfony\\Component\\Console\\Tester\\ApplicationTester' => __DIR__ . '/..' . '/symfony/console/Tester/ApplicationTester.php',
        'Symfony\\Component\\Console\\Tester\\CommandTester' => __DIR__ . '/..' . '/symfony/console/Tester/CommandTester.php',
        'Symfony\\Component\\Debug\\BufferingLogger' => __DIR__ . '/..' . '/symfony/debug/BufferingLogger.php',
        'Symfony\\Component\\Debug\\Debug' => __DIR__ . '/..' . '/symfony/debug/Debug.php',
        'Symfony\\Component\\Debug\\DebugClassLoader' => __DIR__ . '/..' . '/symfony/debug/DebugClassLoader.php',
        'Symfony\\Component\\Debug\\ErrorHandler' => __DIR__ . '/..' . '/symfony/debug/ErrorHandler.php',
        'Symfony\\Component\\Debug\\ExceptionHandler' => __DIR__ . '/..' . '/symfony/debug/ExceptionHandler.php',
        'Symfony\\Component\\Debug\\Exception\\ClassNotFoundException' => __DIR__ . '/..' . '/symfony/debug/Exception/ClassNotFoundException.php',
        'Symfony\\Component\\Debug\\Exception\\FatalErrorException' => __DIR__ . '/..' . '/symfony/debug/Exception/FatalErrorException.php',
        'Symfony\\Component\\Debug\\Exception\\FatalThrowableError' => __DIR__ . '/..' . '/symfony/debug/Exception/FatalThrowableError.php',
        'Symfony\\Component\\Debug\\Exception\\FlattenException' => __DIR__ . '/..' . '/symfony/debug/Exception/FlattenException.php',
        'Symfony\\Component\\Debug\\Exception\\OutOfMemoryException' => __DIR__ . '/..' . '/symfony/debug/Exception/OutOfMemoryException.php',
        'Symfony\\Component\\Debug\\Exception\\SilencedErrorContext' => __DIR__ . '/..' . '/symfony/debug/Exception/SilencedErrorContext.php',
        'Symfony\\Component\\Debug\\Exception\\UndefinedFunctionException' => __DIR__ . '/..' . '/symfony/debug/Exception/UndefinedFunctionException.php',
        'Symfony\\Component\\Debug\\Exception\\UndefinedMethodException' => __DIR__ . '/..' . '/symfony/debug/Exception/UndefinedMethodException.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\ClassNotFoundFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/ClassNotFoundFatalErrorHandler.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\FatalErrorHandlerInterface' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/FatalErrorHandlerInterface.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedFunctionFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/UndefinedFunctionFatalErrorHandler.php',
        'Symfony\\Component\\Debug\\FatalErrorHandler\\UndefinedMethodFatalErrorHandler' => __DIR__ . '/..' . '/symfony/debug/FatalErrorHandler/UndefinedMethodFatalErrorHandler.php',
        'Symfony\\Component\\Finder\\Comparator\\Comparator' => __DIR__ . '/..' . '/symfony/finder/Comparator/Comparator.php',
        'Symfony\\Component\\Finder\\Comparator\\DateComparator' => __DIR__ . '/..' . '/symfony/finder/Comparator/DateComparator.php',
        'Symfony\\Component\\Finder\\Comparator\\NumberComparator' => __DIR__ . '/..' . '/symfony/finder/Comparator/NumberComparator.php',
        'Symfony\\Component\\Finder\\Exception\\AccessDeniedException' => __DIR__ . '/..' . '/symfony/finder/Exception/AccessDeniedException.php',
        'Symfony\\Component\\Finder\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/finder/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Finder\\Finder' => __DIR__ . '/..' . '/symfony/finder/Finder.php',
        'Symfony\\Component\\Finder\\Glob' => __DIR__ . '/..' . '/symfony/finder/Glob.php',
        'Symfony\\Component\\Finder\\Iterator\\CustomFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/CustomFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\DateRangeFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/DateRangeFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\DepthRangeFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/DepthRangeFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\ExcludeDirectoryFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\FileTypeFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/FileTypeFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\FilecontentFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/FilecontentFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\FilenameFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/FilenameFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\FilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/FilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\MultiplePcreFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/MultiplePcreFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\PathFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/PathFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\RecursiveDirectoryIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/RecursiveDirectoryIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\SizeRangeFilterIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/SizeRangeFilterIterator.php',
        'Symfony\\Component\\Finder\\Iterator\\SortableIterator' => __DIR__ . '/..' . '/symfony/finder/Iterator/SortableIterator.php',
        'Symfony\\Component\\Finder\\SplFileInfo' => __DIR__ . '/..' . '/symfony/finder/SplFileInfo.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'TypistTech\\Imposter\\ArrayUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/ArrayUtil.php',
        'TypistTech\\Imposter\\Config' => __DIR__ . '/..' . '/typisttech/imposter/src/Config.php',
        'TypistTech\\Imposter\\ConfigCollection' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollection.php',
        'TypistTech\\Imposter\\ConfigCollectionFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionFactory.php',
        'TypistTech\\Imposter\\ConfigCollectionInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionInterface.php',
        'TypistTech\\Imposter\\ConfigFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigFactory.php',
        'TypistTech\\Imposter\\ConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigInterface.php',
        'TypistTech\\Imposter\\Filesystem' => __DIR__ . '/..' . '/typisttech/imposter/src/Filesystem.php',
        'TypistTech\\Imposter\\FilesystemInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/FilesystemInterface.php',
        'TypistTech\\Imposter\\Imposter' => __DIR__ . '/..' . '/typisttech/imposter/src/Imposter.php',
        'TypistTech\\Imposter\\ImposterFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterFactory.php',
        'TypistTech\\Imposter\\ImposterInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterInterface.php',
        'TypistTech\\Imposter\\Plugin\\Capability\\CommandProvider' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/Capability/CommandProvider.php',
        'TypistTech\\Imposter\\Plugin\\Command\\RunCommand' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/Command/RunCommand.php',
        'TypistTech\\Imposter\\Plugin\\ImposterPlugin' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/ImposterPlugin.php',
        'TypistTech\\Imposter\\ProjectConfig' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfig.php',
        'TypistTech\\Imposter\\ProjectConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfigInterface.php',
        'TypistTech\\Imposter\\StringUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/StringUtil.php',
        'TypistTech\\Imposter\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter/src/Transformer.php',
        'TypistTech\\Imposter\\TransformerInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/TransformerInterface.php',
        'WPS\\Vendor\\DeepCopy\\DeepCopy' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/DeepCopy.php',
        'WPS\\Vendor\\DeepCopy\\Exception\\CloneException' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Exception/CloneException.php',
        'WPS\\Vendor\\DeepCopy\\Exception\\PropertyException' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Exception/PropertyException.php',
        'WPS\\Vendor\\DeepCopy\\Filter\\Doctrine\\DoctrineCollectionFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Filter/Doctrine/DoctrineCollectionFilter.php',
        'WPS\\Vendor\\DeepCopy\\Filter\\Doctrine\\DoctrineEmptyCollectionFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Filter/Doctrine/DoctrineEmptyCollectionFilter.php',
        'WPS\\Vendor\\DeepCopy\\Filter\\Doctrine\\DoctrineProxyFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Filter/Doctrine/DoctrineProxyFilter.php',
        'WPS\\Vendor\\DeepCopy\\Filter\\Filter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Filter/Filter.php',
        'WPS\\Vendor\\DeepCopy\\Filter\\KeepFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Filter/KeepFilter.php',
        'WPS\\Vendor\\DeepCopy\\Filter\\ReplaceFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Filter/ReplaceFilter.php',
        'WPS\\Vendor\\DeepCopy\\Filter\\SetNullFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Filter/SetNullFilter.php',
        'WPS\\Vendor\\DeepCopy\\Matcher\\Doctrine\\DoctrineProxyMatcher' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Matcher/Doctrine/DoctrineProxyMatcher.php',
        'WPS\\Vendor\\DeepCopy\\Matcher\\Matcher' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Matcher/Matcher.php',
        'WPS\\Vendor\\DeepCopy\\Matcher\\PropertyMatcher' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Matcher/PropertyMatcher.php',
        'WPS\\Vendor\\DeepCopy\\Matcher\\PropertyNameMatcher' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Matcher/PropertyNameMatcher.php',
        'WPS\\Vendor\\DeepCopy\\Matcher\\PropertyTypeMatcher' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Matcher/PropertyTypeMatcher.php',
        'WPS\\Vendor\\DeepCopy\\Reflection\\ReflectionHelper' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/Reflection/ReflectionHelper.php',
        'WPS\\Vendor\\DeepCopy\\TypeFilter\\Date\\DateIntervalFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/Date/DateIntervalFilter.php',
        'WPS\\Vendor\\DeepCopy\\TypeFilter\\ReplaceFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/ReplaceFilter.php',
        'WPS\\Vendor\\DeepCopy\\TypeFilter\\ShallowCopyFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/ShallowCopyFilter.php',
        'WPS\\Vendor\\DeepCopy\\TypeFilter\\Spl\\SplDoublyLinkedList' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/Spl/SplDoublyLinkedList.php',
        'WPS\\Vendor\\DeepCopy\\TypeFilter\\Spl\\SplDoublyLinkedListFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/Spl/SplDoublyLinkedListFilter.php',
        'WPS\\Vendor\\DeepCopy\\TypeFilter\\TypeFilter' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/TypeFilter/TypeFilter.php',
        'WPS\\Vendor\\DeepCopy\\TypeMatcher\\TypeMatcher' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/TypeMatcher/TypeMatcher.php',
        'WPS\\Vendor\\Gerardojbaez\\Money\\Currency' => __DIR__ . '/..' . '/gerardojbaez/money/src/Currency.php',
        'WPS\\Vendor\\Gerardojbaez\\Money\\Exceptions\\CurrencyException' => __DIR__ . '/..' . '/gerardojbaez/money/src/Exceptions/CurrencyException.php',
        'WPS\\Vendor\\Gerardojbaez\\Money\\Money' => __DIR__ . '/..' . '/gerardojbaez/money/src/Money.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc37342d6ccb37f9b966782650de7b1bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc37342d6ccb37f9b966782650de7b1bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc37342d6ccb37f9b966782650de7b1bb::$classMap;

        }, null, ClassLoader::class);
    }
}
