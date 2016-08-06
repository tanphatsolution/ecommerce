(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"image\/{path}","name":"image","action":"App\Http\Controllers\Backend\DashboardController@getReponseImage"},{"host":null,"methods":["GET","HEAD"],"uri":"login","name":null,"action":"App\Http\Controllers\Auth\Backend\AuthController@getLogin"},{"host":null,"methods":["POST"],"uri":"login","name":"login","action":"App\Http\Controllers\Auth\Backend\AuthController@postLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"logout","name":null,"action":"App\Http\Controllers\Auth\Backend\AuthController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"data\/product\/{id}","name":"data.product.show","action":"App\Http\Controllers\Frontend\ProductController@dataShow"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":"home.index","action":"App\Http\Controllers\Frontend\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"category\/{slug}","name":"category.slug","action":"App\Http\Controllers\Frontend\CategoryController@category"},{"host":null,"methods":["GET","HEAD"],"uri":"page\/{slug}","name":"page.slug","action":"App\Http\Controllers\Frontend\PageController@slug"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/{slug}","name":"product.slug","action":"App\Http\Controllers\Frontend\ProductController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"backend","name":null,"action":"App\Http\Controllers\Backend\DashboardController@index"},{"host":null,"methods":["POST"],"uri":"backend\/summernote\/image","name":"backend.summernote.image","action":"App\Http\Controllers\Backend\DashboardController@summernoteImage"},{"host":null,"methods":["PATCH"],"uri":"backend\/notification\/{notification}","name":"backend.notification.read","action":"App\Http\Controllers\Backend\DashboardController@readNotification"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/user\/data\/role\/{role}","name":"backend.user.data.role","action":"App\Http\Controllers\Backend\UserController@getDataWithRole"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/user\/role\/{role}","name":"backend.user.role","action":"App\Http\Controllers\Backend\UserController@role"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/user\/data","name":"backend.user.data","action":"App\Http\Controllers\Backend\UserController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/user","name":"backend.user.index","action":"App\Http\Controllers\Backend\UserController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/user\/create","name":"backend.user.create","action":"App\Http\Controllers\Backend\UserController@create"},{"host":null,"methods":["POST"],"uri":"backend\/user","name":"backend.user.store","action":"App\Http\Controllers\Backend\UserController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/user\/{user}","name":"backend.user.show","action":"App\Http\Controllers\Backend\UserController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/user\/{user}\/edit","name":"backend.user.edit","action":"App\Http\Controllers\Backend\UserController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/user\/{user}","name":"backend.user.update","action":"App\Http\Controllers\Backend\UserController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/user\/{user}","name":"backend.user.destroy","action":"App\Http\Controllers\Backend\UserController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/role\/data","name":"backend.role.data","action":"App\Http\Controllers\Backend\RoleController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/role","name":"backend.role.index","action":"App\Http\Controllers\Backend\RoleController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/role\/create","name":"backend.role.create","action":"App\Http\Controllers\Backend\RoleController@create"},{"host":null,"methods":["POST"],"uri":"backend\/role","name":"backend.role.store","action":"App\Http\Controllers\Backend\RoleController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/role\/{role}","name":"backend.role.show","action":"App\Http\Controllers\Backend\RoleController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/role\/{role}\/edit","name":"backend.role.edit","action":"App\Http\Controllers\Backend\RoleController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/role\/{role}","name":"backend.role.update","action":"App\Http\Controllers\Backend\RoleController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/role\/{role}","name":"backend.role.destroy","action":"App\Http\Controllers\Backend\RoleController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/profile\/log","name":"backend.profile.log","action":"App\Http\Controllers\Backend\ProfileController@getLog"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/profile","name":"backend.profile","action":"App\Http\Controllers\Backend\ProfileController@userShow"},{"host":null,"methods":["PATCH"],"uri":"backend\/profile\/update","name":"backend.profile.update","action":"App\Http\Controllers\Backend\ProfileController@userUpdate"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/category\/type\/{type}","name":"backend.category.type","action":"App\Http\Controllers\Backend\CategoryController@withType"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/category","name":"backend.category.index","action":"App\Http\Controllers\Backend\CategoryController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/category\/create","name":"backend.category.create","action":"App\Http\Controllers\Backend\CategoryController@create"},{"host":null,"methods":["POST"],"uri":"backend\/category","name":"backend.category.store","action":"App\Http\Controllers\Backend\CategoryController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/category\/{category}","name":"backend.category.show","action":"App\Http\Controllers\Backend\CategoryController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/category\/{category}\/edit","name":"backend.category.edit","action":"App\Http\Controllers\Backend\CategoryController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/category\/{category}","name":"backend.category.update","action":"App\Http\Controllers\Backend\CategoryController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/category\/{category}","name":"backend.category.destroy","action":"App\Http\Controllers\Backend\CategoryController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/post\/data\/category\/{category}","name":"backend.post.data.category","action":"App\Http\Controllers\Backend\PostController@getDataWithCategory"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/post\/category\/{category}","name":"backend.post.category","action":"App\Http\Controllers\Backend\PostController@category"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/post\/data","name":"backend.post.data","action":"App\Http\Controllers\Backend\PostController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/post\/tags","name":"backend.post.tags","action":"App\Http\Controllers\Backend\PostController@getTags"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/post","name":"backend.post.index","action":"App\Http\Controllers\Backend\PostController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/post\/create","name":"backend.post.create","action":"App\Http\Controllers\Backend\PostController@create"},{"host":null,"methods":["POST"],"uri":"backend\/post","name":"backend.post.store","action":"App\Http\Controllers\Backend\PostController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/post\/{post}","name":"backend.post.show","action":"App\Http\Controllers\Backend\PostController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/post\/{post}\/edit","name":"backend.post.edit","action":"App\Http\Controllers\Backend\PostController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/post\/{post}","name":"backend.post.update","action":"App\Http\Controllers\Backend\PostController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/post\/{post}","name":"backend.post.destroy","action":"App\Http\Controllers\Backend\PostController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/page\/data","name":"backend.page.data","action":"App\Http\Controllers\Backend\PageController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/page\/tags","name":"backend.page.tags","action":"App\Http\Controllers\Backend\PageController@getTags"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/page","name":"backend.page.index","action":"App\Http\Controllers\Backend\PageController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/page\/create","name":"backend.page.create","action":"App\Http\Controllers\Backend\PageController@create"},{"host":null,"methods":["POST"],"uri":"backend\/page","name":"backend.page.store","action":"App\Http\Controllers\Backend\PageController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/page\/{page}","name":"backend.page.show","action":"App\Http\Controllers\Backend\PageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/page\/{page}\/edit","name":"backend.page.edit","action":"App\Http\Controllers\Backend\PageController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/page\/{page}","name":"backend.page.update","action":"App\Http\Controllers\Backend\PageController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/page\/{page}","name":"backend.page.destroy","action":"App\Http\Controllers\Backend\PageController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/provider\/data","name":"backend.provider.data","action":"App\Http\Controllers\Backend\ProviderController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/provider","name":"backend.provider.index","action":"App\Http\Controllers\Backend\ProviderController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/provider\/create","name":"backend.provider.create","action":"App\Http\Controllers\Backend\ProviderController@create"},{"host":null,"methods":["POST"],"uri":"backend\/provider","name":"backend.provider.store","action":"App\Http\Controllers\Backend\ProviderController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/provider\/{provider}","name":"backend.provider.show","action":"App\Http\Controllers\Backend\ProviderController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/provider\/{provider}\/edit","name":"backend.provider.edit","action":"App\Http\Controllers\Backend\ProviderController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/provider\/{provider}","name":"backend.provider.update","action":"App\Http\Controllers\Backend\ProviderController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/provider\/{provider}","name":"backend.provider.destroy","action":"App\Http\Controllers\Backend\ProviderController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/product\/data\/category\/{category}","name":"backend.product.data.category","action":"App\Http\Controllers\Backend\ProductController@getDataWithCategory"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/product\/category\/{category}","name":"backend.product.category","action":"App\Http\Controllers\Backend\ProductController@category"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/product\/data","name":"backend.product.data","action":"App\Http\Controllers\Backend\ProductController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/product\/tags","name":"backend.product.tags","action":"App\Http\Controllers\Backend\ProductController@getTags"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/product","name":"backend.product.index","action":"App\Http\Controllers\Backend\ProductController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/product\/create","name":"backend.product.create","action":"App\Http\Controllers\Backend\ProductController@create"},{"host":null,"methods":["POST"],"uri":"backend\/product","name":"backend.product.store","action":"App\Http\Controllers\Backend\ProductController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/product\/{product}","name":"backend.product.show","action":"App\Http\Controllers\Backend\ProductController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/product\/{product}\/edit","name":"backend.product.edit","action":"App\Http\Controllers\Backend\ProductController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/product\/{product}","name":"backend.product.update","action":"App\Http\Controllers\Backend\ProductController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/product\/{product}","name":"backend.product.destroy","action":"App\Http\Controllers\Backend\ProductController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/property","name":"backend.property.index","action":"App\Http\Controllers\Backend\PropertyController@index"},{"host":null,"methods":["POST"],"uri":"backend\/property","name":"backend.property.store","action":"App\Http\Controllers\Backend\PropertyController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/property\/{property}\/edit","name":"backend.property.edit","action":"App\Http\Controllers\Backend\PropertyController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/property\/{property}","name":"backend.property.update","action":"App\Http\Controllers\Backend\PropertyController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/property\/{property}","name":"backend.property.destroy","action":"App\Http\Controllers\Backend\PropertyController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/config","name":"backend.config.index","action":"App\Http\Controllers\Backend\ConfigController@index"},{"host":null,"methods":["POST"],"uri":"backend\/config","name":"backend.config.store","action":"App\Http\Controllers\Backend\ConfigController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/slide\/data","name":"backend.slide.data","action":"App\Http\Controllers\Backend\SlideController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/slide","name":"backend.slide.index","action":"App\Http\Controllers\Backend\SlideController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/slide\/create","name":"backend.slide.create","action":"App\Http\Controllers\Backend\SlideController@create"},{"host":null,"methods":["POST"],"uri":"backend\/slide","name":"backend.slide.store","action":"App\Http\Controllers\Backend\SlideController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/slide\/{slide}","name":"backend.slide.show","action":"App\Http\Controllers\Backend\SlideController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/slide\/{slide}\/edit","name":"backend.slide.edit","action":"App\Http\Controllers\Backend\SlideController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/slide\/{slide}","name":"backend.slide.update","action":"App\Http\Controllers\Backend\SlideController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/slide\/{slide}","name":"backend.slide.destroy","action":"App\Http\Controllers\Backend\SlideController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/image","name":"backend.image.index","action":"App\Http\Controllers\Backend\ImageController@index"},{"host":null,"methods":["POST"],"uri":"backend\/image","name":"backend.image.store","action":"App\Http\Controllers\Backend\ImageController@store"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/image\/{image}","name":"backend.image.update","action":"App\Http\Controllers\Backend\ImageController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/image\/{image}","name":"backend.image.destroy","action":"App\Http\Controllers\Backend\ImageController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/order\/data","name":"backend.order.data","action":"App\Http\Controllers\Backend\OrderController@getData"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/order","name":"backend.order.index","action":"App\Http\Controllers\Backend\OrderController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/order\/{order}\/edit","name":"backend.order.edit","action":"App\Http\Controllers\Backend\OrderController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/order\/{order}","name":"backend.order.update","action":"App\Http\Controllers\Backend\OrderController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/order\/{order}","name":"backend.order.destroy","action":"App\Http\Controllers\Backend\OrderController@destroy"},{"host":null,"methods":["POST"],"uri":"backend\/menu\/serialize","name":"backend.menu.serialize","action":"App\Http\Controllers\Backend\MenuController@serialize"},{"host":null,"methods":["GET","HEAD"],"uri":"backend\/menu","name":"backend.menu.index","action":"App\Http\Controllers\Backend\MenuController@index"},{"host":null,"methods":["POST"],"uri":"backend\/menu","name":"backend.menu.store","action":"App\Http\Controllers\Backend\MenuController@store"},{"host":null,"methods":["PUT","PATCH"],"uri":"backend\/menu\/{menu}","name":"backend.menu.update","action":"App\Http\Controllers\Backend\MenuController@update"},{"host":null,"methods":["DELETE"],"uri":"backend\/menu\/{menu}","name":"backend.menu.destroy","action":"App\Http\Controllers\Backend\MenuController@destroy"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                return this.getCorrectUrl(uri + qs);
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if(!this.absolute)
                    return url;

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

