
+<html>
+    <head>
+        <meta name="robots" content="noindex,nofollow" />
+        <style>
+            /* Copyright (c) 2010, Yahoo! Inc. All rights reserved. Code licensed under the BSD License: http://developer.yahoo.com/yui/license.html */
+            html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:text-top;}sub{vertical-align:text-bottom;}input,textarea,select{font-family:inherit;font-size:inherit;font-weight:inherit;}input,textarea,select{*font-size:100%;}legend{color:#000;}
+            html { background: #eee; padding: 10px }
+            img { border: 0; }
+            #sf-resetcontent { width:970px; margin:0 auto; }
+                        .sf-reset { font: 11px Verdana, Arial, sans-serif; color: #333 }
+            .sf-reset .clear { clear:both; height:0; font-size:0; line-height:0; }
+            .sf-reset .clear_fix:after { display:block; height:0; clear:both; visibility:hidden; }
+            .sf-reset .clear_fix { display:inline-block; }
+            .sf-reset * html .clear_fix { height:1%; }
+            .sf-reset .clear_fix { display:block; }
+            .sf-reset, .sf-reset .block { margin: auto }
+            .sf-reset abbr { border-bottom: 1px dotted #000; cursor: help; }
+            .sf-reset p { font-size:14px; line-height:20px; color:#868686; padding-bottom:20px }
+            .sf-reset strong { font-weight:bold; }
+            .sf-reset a { color:#6c6159; cursor: default; }
+            .sf-reset a img { border:none; }
+            .sf-reset a:hover { text-decoration:underline; }
+            .sf-reset em { font-style:italic; }
+            .sf-reset h1, .sf-reset h2 { font: 20px Georgia, "Times New Roman", Times, serif }
+            .sf-reset .exception_counter { background-color: #fff; color: #333; padding: 6px; float: left; margin-right: 10px; float: left; display: block; }
+            .sf-reset .exception_title { margin-left: 3em; margin-bottom: 0.7em; display: block; }
+            .sf-reset .exception_message { margin-left: 3em; display: block; }
+            .sf-reset .traces li { font-size:12px; padding: 2px 4px; list-style-type:decimal; margin-left:20px; }
+            .sf-reset .block { background-color:#FFFFFF; padding:10px 28px; margin-bottom:20px;
+                border-bottom-right-radius: 16px;
+                border-bottom-left-radius: 16px;
+                border-bottom:1px solid #ccc;
+                border-right:1px solid #ccc;
+                border-left:1px solid #ccc;
+                word-wrap: break-word;
+            }
+            .sf-reset .block_exception { background-color:#ddd; color: #333; padding:20px;
+                border-top-left-radius: 16px;
+                border-top-right-radius: 16px;
+                border-top:1px solid #ccc;
+                border-right:1px solid #ccc;
+                border-left:1px solid #ccc;
+                overflow: hidden;
+                word-wrap: break-word;
+            }
+            .sf-reset a { background:none; color:#868686; text-decoration:none; }
+            .sf-reset a:hover { background:none; color:#313131; text-decoration:underline; }
+            .sf-reset ol { padding: 10px 0; }
+            .sf-reset h1 { background-color:#FFFFFF; padding: 15px 28px; margin-bottom: 20px;
+                border-radius: 10px;
+                border: 1px solid #ccc;
+            }
+        </style>
+    </head>
+    <body>
+                    <div id="sf-resetcontent" class="sf-reset">
+                <h1>Whoops, looks like something went wrong.</h1>
+                                        <h2 class="block_exception clear_fix">
+                            <span class="exception_counter">1/1</span>
+                            <span class="exception_title"><abbr title="ErrorException">ErrorException</abbr> in <a title="/Users/christophervundi/Sites/shortener/app/Http/Controllers/LinksController.php line 47">LinksController.php line 47</a>:</span>
+                            <span class="exception_message">Trying to get property of non-object</span>
+                        </h2>
+                        <div class="block">
+                            <ol class="traces list_exception">
+       <li> in <a title="/Users/christophervundi/Sites/shortener/app/Http/Controllers/LinksController.php line 47">LinksController.php line 47</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->Laravel\Lumen\Concerns\{closure}(8, 'Trying to get property of non-object', '/Users/christophervundi/Sites/shortener/app/Http/Controllers/LinksController.php', 47, <em>array</em>('request' => <em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), 'code' => <em>null</em>, 'link' => <em>null</em>)) in <a title="/Users/christophervundi/Sites/shortener/app/Http/Controllers/LinksController.php line 47">LinksController.php line 47</a></li>
+       <li>at <abbr title="App\Http\Controllers\LinksController">LinksController</abbr>->show(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))</li>
+       <li>at <abbr title=""></abbr>call_user_func_array(<em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\LinksController">LinksController</abbr>), 'show'), <em>array</em>(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))) in <a title="/Users/christophervundi/Sites/shortener/vendor/illuminate/container/BoundMethod.php line 29">BoundMethod.php line 29</a></li>
+       <li>at <abbr title="Illuminate\Container\BoundMethod">BoundMethod</abbr>::Illuminate\Container\{closure}() in <a title="/Users/christophervundi/Sites/shortener/vendor/illuminate/container/BoundMethod.php line 87">BoundMethod.php line 87</a></li>
+       <li>at <abbr title="Illuminate\Container\BoundMethod">BoundMethod</abbr>::callBoundMethod(<em>object</em>(<abbr title="Laravel\Lumen\Application">Application</abbr>), <em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\LinksController">LinksController</abbr>), 'show'), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/illuminate/container/BoundMethod.php line 31">BoundMethod.php line 31</a></li>
+       <li>at <abbr title="Illuminate\Container\BoundMethod">BoundMethod</abbr>::call(<em>object</em>(<abbr title="Laravel\Lumen\Application">Application</abbr>), <em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\LinksController">LinksController</abbr>), 'show'), <em>array</em>(), <em>null</em>) in <a title="/Users/christophervundi/Sites/shortener/vendor/illuminate/container/Container.php line 531">Container.php line 531</a></li>
+       <li>at <abbr title="Illuminate\Container\Container">Container</abbr>->call(<em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\LinksController">LinksController</abbr>), 'show'), <em>array</em>()) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Concerns/RoutesRequests.php line 741">RoutesRequests.php line 741</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->callControllerCallable(<em>array</em>(<em>object</em>(<abbr title="App\Http\Controllers\LinksController">LinksController</abbr>), 'show'), <em>array</em>()) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Concerns/RoutesRequests.php line 707">RoutesRequests.php line 707</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->callLumenController(<em>object</em>(<abbr title="App\Http\Controllers\LinksController">LinksController</abbr>), 'show', <em>array</em>(<em>true</em>, <em>array</em>('uses' => 'App\\Http\\Controllers\\LinksController@show'), <em>array</em>())) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Concerns/RoutesRequests.php line 681">RoutesRequests.php line 681</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->callControllerAction(<em>array</em>(<em>true</em>, <em>array</em>('uses' => 'App\\Http\\Controllers\\LinksController@show'), <em>array</em>())) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Concerns/RoutesRequests.php line 643">RoutesRequests.php line 643</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->callActionOnArrayBasedRoute(<em>array</em>(<em>true</em>, <em>array</em>('uses' => 'App\\Http\\Controllers\\LinksController@show'), <em>array</em>())) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Concerns/RoutesRequests.php line 628">RoutesRequests.php line 628</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->handleFoundRoute(<em>array</em>(<em>true</em>, <em>array</em>('uses' => 'App\\Http\\Controllers\\LinksController@show'), <em>array</em>())) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Concerns/RoutesRequests.php line 528">RoutesRequests.php line 528</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->Laravel\Lumen\Concerns\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))</li>
+       <li>at <abbr title=""></abbr>call_user_func(<em>object</em>(<abbr title="Closure">Closure</abbr>), <em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Routing/Pipeline.php line 52">Pipeline.php line 52</a></li>
+       <li>at <abbr title="Laravel\Lumen\Routing\Pipeline">Pipeline</abbr>->Laravel\Lumen\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/app/Http/Middleware/UrlSanitizerMiddleware.php line 20">UrlSanitizerMiddleware.php line 20</a></li>
+       <li>at <abbr title="App\Http\Middleware\UrlSanitizerMiddleware">UrlSanitizerMiddleware</abbr>->handle(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/illuminate/pipeline/Pipeline.php line 148">Pipeline.php line 148</a></li>
+       <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->Illuminate\Pipeline\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>))</li>
+       <li>at <abbr title=""></abbr>call_user_func(<em>object</em>(<abbr title="Closure">Closure</abbr>), <em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Routing/Pipeline.php line 32">Pipeline.php line 32</a></li>
+       <li>at <abbr title="Laravel\Lumen\Routing\Pipeline">Pipeline</abbr>->Laravel\Lumen\Routing\{closure}(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/illuminate/pipeline/Pipeline.php line 102">Pipeline.php line 102</a></li>
+       <li>at <abbr title="Illuminate\Pipeline\Pipeline">Pipeline</abbr>->then(<em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Concerns/RoutesRequests.php line 778">RoutesRequests.php line 778</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->sendThroughPipeline(<em>array</em>('App\\Http\\Middleware\\UrlSanitizerMiddleware'), <em>object</em>(<abbr title="Closure">Closure</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Concerns/RoutesRequests.php line 534">RoutesRequests.php line 534</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->dispatch(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Concerns/RoutesRequests.php line 458">RoutesRequests.php line 458</a></li>
+       <li>at <abbr title="Laravel\Lumen\Application">Application</abbr>->handle(<em>object</em>(<abbr title="Illuminate\Http\Request">Request</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Testing/Concerns/MakesHttpRequests.php line 339">MakesHttpRequests.php line 339</a></li>
+       <li>at <abbr title="Laravel\Lumen\Testing\TestCase">TestCase</abbr>->call('GET', '/', <em>array</em>(), <em>array</em>(), <em>array</em>(), <em>array</em>()) in <a title="/Users/christophervundi/Sites/shortener/vendor/laravel/lumen-framework/src/Testing/Concerns/MakesHttpRequests.php line 63">MakesHttpRequests.php line 63</a></li>
+       <li>at <abbr title="Laravel\Lumen\Testing\TestCase">TestCase</abbr>->get('/') in <a title="/Users/christophervundi/Sites/shortener/tests/Unit/MathTest.php line 17">MathTest.php line 17</a></li>
+       <li>at <abbr title="MathTest">MathTest</abbr>->testExample()</li>
+       <li>at <abbr title="ReflectionMethod">ReflectionMethod</abbr>->invokeArgs(<em>object</em>(<abbr title="MathTest">MathTest</abbr>), <em>array</em>()) in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/src/Framework/TestCase.php line 1054">TestCase.php line 1054</a></li>
+       <li>at <abbr title="PHPUnit_Framework_TestCase">PHPUnit_Framework_TestCase</abbr>->runTest() in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/src/Framework/TestCase.php line 905">TestCase.php line 905</a></li>
+       <li>at <abbr title="PHPUnit_Framework_TestCase">PHPUnit_Framework_TestCase</abbr>->runBare() in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/src/Framework/TestResult.php line 686">TestResult.php line 686</a></li>
+       <li>at <abbr title="PHPUnit_Framework_TestResult">PHPUnit_Framework_TestResult</abbr>->run(<em>object</em>(<abbr title="MathTest">MathTest</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/src/Framework/TestCase.php line 860">TestCase.php line 860</a></li>
+       <li>at <abbr title="PHPUnit_Framework_TestCase">PHPUnit_Framework_TestCase</abbr>->run(<em>object</em>(<abbr title="PHPUnit_Framework_TestResult">PHPUnit_Framework_TestResult</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/src/Framework/TestSuite.php line 722">TestSuite.php line 722</a></li>
+       <li>at <abbr title="PHPUnit_Framework_TestSuite">PHPUnit_Framework_TestSuite</abbr>->run(<em>object</em>(<abbr title="PHPUnit_Framework_TestResult">PHPUnit_Framework_TestResult</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/src/Framework/TestSuite.php line 722">TestSuite.php line 722</a></li>
+       <li>at <abbr title="PHPUnit_Framework_TestSuite">PHPUnit_Framework_TestSuite</abbr>->run(<em>object</em>(<abbr title="PHPUnit_Framework_TestResult">PHPUnit_Framework_TestResult</abbr>)) in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/src/TextUI/TestRunner.php line 517">TestRunner.php line 517</a></li>
+       <li>at <abbr title="PHPUnit_TextUI_TestRunner">PHPUnit_TextUI_TestRunner</abbr>->doRun(<em>object</em>(<abbr title="PHPUnit_Framework_TestSuite">PHPUnit_Framework_TestSuite</abbr>), <em>array</em>('listGroups' => <em>false</em>, 'listSuites' => <em>false</em>, 'loader' => <em>null</em>, 'useDefaultConfiguration' => <em>true</em>, 'loadedExtensions' => <em>array</em>(), 'notLoadedExtensions' => <em>array</em>(), 'testSuffixes' => <em>array</em>('Test.php', '.phpt'), 'configuration' => <em>object</em>(<abbr title="PHPUnit_Util_Configuration">PHPUnit_Util_Configuration</abbr>), 'debug' => <em>false</em>, 'filter' => <em>false</em>, 'listeners' => <em>array</em>(), 'backupGlobals' => <em>false</em>, 'backupStaticAttributes' => <em>false</em>, 'bootstrap' => '/Users/christophervundi/Sites/shortener/bootstrap/app.php', 'colors' => 'auto', 'convertErrorsToExceptions' => <em>true</em>, 'convertNoticesToExceptions' => <em>true</em>, 'convertWarningsToExceptions' => <em>true</em>, 'processIsolation' => <em>false</em>, 'stopOnFailure' => <em>false</em>, 'testdoxGroups' => <em>array</em>(), 'testdoxExcludeGroups' => <em>array</em>(), 'addUncoveredFilesFromWhitelist' => <em>true</em>, 'processUncoveredFilesFromWhitelist' => <em>false</em>, 'beStrictAboutChangesToGlobalState' => <em>null</em>, 'cacheTokens' => <em>false</em>, 'columns' => 80, 'excludeGroups' => <em>array</em>(), 'groups' => <em>array</em>(), 'logIncompleteSkipped' => <em>false</em>, 'repeat' => <em>false</em>, 'reportHighLowerBound' => 90, 'reportLowUpperBound' => 50, 'crap4jThreshold' => 30, 'stopOnError' => <em>false</em>, 'stopOnWarning' => <em>false</em>, 'stopOnIncomplete' => <em>false</em>, 'stopOnRisky' => <em>false</em>, 'stopOnSkipped' => <em>false</em>, 'failOnWarning' => <em>false</em>, 'failOnRisky' => <em>false</em>, 'timeoutForSmallTests' => 1, 'timeoutForMediumTests' => 10, 'timeoutForLargeTests' => 60, 'reportUselessTests' => <em>false</em>, 'strictCoverage' => <em>false</em>, 'disallowTestOutput' => <em>false</em>, 'enforceTimeLimit' => <em>false</em>, 'disallowTodoAnnotatedTests' => <em>false</em>, 'beStrictAboutResourceUsageDuringSmallTests' => <em>false</em>, 'reverseList' => <em>false</em>, 'registerMockObjectsFromTestArgumentsRecursively' => <em>false</em>, 'verbose' => <em>false</em>), <em>true</em>) in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/src/TextUI/Command.php line 186">Command.php line 186</a></li>
+       <li>at <abbr title="PHPUnit_TextUI_Command">PHPUnit_TextUI_Command</abbr>->run(<em>array</em>('vendor/bin/phpunit'), <em>true</em>) in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/src/TextUI/Command.php line 116">Command.php line 116</a></li>
+       <li>at <abbr title="PHPUnit_TextUI_Command">PHPUnit_TextUI_Command</abbr>::main() in <a title="/Users/christophervundi/Sites/shortener/vendor/phpunit/phpunit/phpunit line 52">phpunit line 52</a></li>
+    </ol>
+</div>
+
+            </div>
+    </body>
+</html>'
