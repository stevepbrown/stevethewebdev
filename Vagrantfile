# -*- mode: ruby -*-
# vi: set ft=ruby :


# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.


##############################
###     SCRIPT SWITCH      ###
##############################

TRIGGERS="OFF"

print "Triggers are  #{TRIGGERS}\n"

###   END SCRIPT SWITCH    ###


Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.


  # For a detailed list of configuration properties see https://www.vagrantup.com/docs/vagrantfile/machine_settings.html

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  #config.vm.box = ""

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  config.vm.box_check_update = true

# The name of the vagrant box determined by <<vagrant box list>> (this points to
# the box file)
config.vm.box = "../../boxes/current/v2.0/spb_vagrant_base_v2.box"

# The hostname as it appears on the guest machine command prompt
config.vm.hostname = "trades"

# A message to show after vagrant up. This will be shown to the user and is useful
# for containing instructions such as how to access various components of the development environment.

#config.vm.post_up_message=  "Check Db passwords & users!"


# Virtual Machine Name

#You can customize the name that appears in the VirtualBox GUI by setting the name property. By #default, Vagrant sets it to the containing folder of the Vagrantfile plus a timestamp of when #the machine was created. By setting another name, your VM can be more easily identified.

config.vm.provider "virtualbox" do |v|
  v.name = "trades"
end


  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # NOTE: This will enable public access to the opened port
  # config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine and only allow access
  # via 127.0.0.1 to disable public access
   config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
   config.vm.network "private_network", ip: "192.168.33.15"

   # Wait for a graceful halt 
   config.vm.graceful_halt_timeout = 20

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"

config.vm.synced_folder "./public", "/var/www/public", 
:group => "www-data",
:owner => "vagrant",
:mount_options => ["dmode=775","fmode=664"]

config.vm.synced_folder "./application", "/var/www/application", 
:group => "www-data",
:owner => "vagrant",
:mount_options => ["dmode=775","fmode=664"]

config.vm.synced_folder "./scripts/", "/home/vagrant/scripts/", :mount_options => ["dmode=770", "fmode=770"], create:true



 #######################################
    ###           TRIGGERS  (Native execution - without plug-in)            ###
    #######################################


if TRIGGERS=="ON" then

    print "Triggers are set to run"

    #Running a remote script to save a database on your host before destroying a #guest:

       
        config.trigger.before :halt do |trigger|
         trigger.warn = "Applying session database backup & halting"
         trigger.run_remote = {inline:"/home/vagrant/scripts/db/session_bkup.sh"}
        end

        config.trigger.before :suspend do |trigger|
          trigger.warn = "Applying session database backup & suspending"
          trigger.run_remote = {inline: "/home/vagrant/scripts/db/session_bkup.sh"}
        end

        config.trigger.before :reload do |trigger|
         trigger.warn = "Applying session database backup & reloading"
         trigger.run_remote = {inline:"/home/vagrant/scripts/db/session_bkup.sh"}
        end
  
      else

        print "Skipping triggers\n"

      end

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
  # config.vm.provision "shell", inline: <<-SHELL
  #   apt-get update
  #   apt-get install -y apache2
  # SHELL
end
