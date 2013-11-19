// Load the application once the DOM is ready, using `jQuery.ready`:
$(function() {

	var User = Backbone.Model.extend({
		initialize : function() {
			if (typeof this.id == 'undefined')
				this.url = 'home/user'
			else
				this.url = 'home/user/' + this.id;
		}
	});

	var UserView = Backbone.View
			.extend({

				tagName : 'tr',

				initialize : function() {
					var $this = this;
					this.model.bind("reset", this.render, this);
					this.model.bind("destroy", this.remove, this);
					this.render();
					this.$el.find('.del').on('click', function() {
						$this.model.destroy();
					});
				},

				render : function(eventName) {
					this.$el
							.append('<td><a href="#user/'
									+ this.model.id
									+ '">'
									+ JSON.stringify(this.model.attributes)
									+ '</a></td><td><a href="#edit-user/'
									+ this.model.id
									+ '" class="">Edit</a></td><td><a href="javascript:void(0)" class="del">x</a></td>');
					return this;
				}
			});

	var UserCreateView = Backbone.View
			.extend({

				tagName : 'div',

				template : _
						.template('<form><input type="text" name="user_name" /><input type="button" value="Create" id="btn_create"/></form>'),

				initialize : function() {
					self = this;
					this.render();
					this.$el.find("#btn_create").on("click", function() {
						var form = self.$el.find('form').serializeArray();
						self.model.save(form[0], {
							success : function(model, response, options) {
								//alert(response);
								// model.id=response;
								//window.userList.add(model);
								app_router.navigate('/user-list', {
									trigger : true
								});
							}
						});

					});
				},

				render : function(eventName) {
					this.$el.html(this.template);
					return this;
				}
			});

	var UserEditView = Backbone.View.extend({

		// el : '.app-content',

		initialize : function() {
			var self = this;
			this.render();
			this.$el.find("#inpsave").on("click", function() {
				var form = self.$el.find('form').serializeArray();
				self.model.save(form, {
					success : function(model, response, options) {
						app_router.navigate('/user-list', {
							trigger : true
						});
					}
				});
			});
		},

		render : function(eventName) {
			var edit_templ = "<table><tr><td>" + "<form id='frm_edit'>"
					+ "<input name='user_name' type='text' value='"
					+ this.model.attributes.user_name + "'>"
					+ "<br><input type='button' value='Edit' id='inpsave'> "
					+ "</tr></td></table>";

			this.$el.append(edit_templ);
			return this;
		}
	});

	var UserList = Backbone.Collection.extend({
		model : User,
		url : 'home/user-list'
	});

	var UserListView = Backbone.View.extend({

		tagName : 'table',

		initialize : function() {
			$this = this;
			this.render();
			//this.collection.on('add', function(model, collection, options) {
				//$this.render();
			//});

		},

		render : function(eventName) {
			$this = this;
			console.log('render', this.collection.models);
			$this.$el.empty();
			_.each(this.collection.models, function(item) {
				$this.$el.append(new UserView({
					model : item
				}).el);
			});
			return this;
		}
	});

	var AppView = Backbone.View.extend({

		el : $("#apps"),

		body : function() {
			return this.$el.find("#" + this.name + " .app-content");
		},

		name : '',

		template : _.template('<div class="app" id="<%= name %>">'
				+ '<h2>App Name:<%= name %></h2>'
				+ '<a href="#create-user">Create</a><br />'
				+ '<a href="#user-list">List</a>'
				+ '<div class="app-content"></div>' + '</div>'),

		initialize : function() {
			this.name = this.options.name;
			this.render();
		},

		render : function() {
			this.$el.append(this.template({
				name : this.name
			}));
		}

	});

	var AppRouter = Backbone.Router.extend({

		routes : {
			"user-list" : "getUserList",
			"user/:id" : "getUser",
			"edit-user/:id" : "editUser",
			"create-user" : "createUser"
		// "user/update/:id" : "putUser",
		// "user/delete/:id" : "deleteUser"
		},

		initialize : function() {
			this.app_view = new AppView({
				name : 'Kaal'
			});
		},

		createUser : function() {
			$this = this;
			var user_create_view = new UserCreateView({
				model : new User
			});
			$this.app_view.body().html(user_create_view.el);
		},
		getUserList : function() {
			$this = this;			
			userList.fetch({
				success : function(model, response, options) {
					if (response) {
						_.each(response, function(item) {
							var user = new User(item);
							userList.add(user)
						});

						$this.app_view.body().html(new UserListView({
							collection : userList
						}).el);

					}
				}
			});
		},

		getUser : function(id) {
			$this = this;
			var id = id ? parseInt(id, 10) : 1;
			var user = new User({
				id : id
			});
			user.fetch({
				success : function(model, response, options) {
					if (response)
						$this.app_view.body().html(new UserView({
							model : user
						}).el);
				}
			});
		},

		editUser : function(id) {
			$this = this;
			var id = id ? parseInt(id, 10) : 1;
			var user = new User({
				id : id
			});
			user.fetch({
				success : function(model, response, options) {
					if (response)
						$this.app_view.body().html(new UserEditView({
							model : user
						}).el);
				}
			});
		}

	});

	window.userList = new UserList();
	var app_router = new AppRouter;
	Backbone.history.start();
	

});
