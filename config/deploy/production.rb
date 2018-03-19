set :stage, :production

# Simple Role Syntax
# ==================
role :app, %w{barbacorsini.net}
role :web, %w{barbacorsini.net}
role :db,  %w{barbacorsini.net}

# Extended Server Syntax
# ======================
server 'barbacorsini.net', user: 'ivlissco', roles: %w{web app db}

# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
 set :ssh_options, {
    keys: %w(~/.ssh/id_rsa),
    forward_agent: false,
    password: 'e42mQ5uq9S',
    auth_methods: %w(password)
  }

fetch(:default_env).merge!(wp_env: :production)
