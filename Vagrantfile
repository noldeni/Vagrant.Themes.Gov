# -*- mode: ruby -*-
# vi: set ft=ruby :

# Check for vagrant-vbguest plugin
unless Vagrant.has_plugin?("vagrant-vbguest")
  print "please execute the following command to enable automated vbguest installation\n\n"
  print "vagrant plugin install vagrant-vbguest"
  exit
end

# Main vagrant configuration
Vagrant.configure("2") do |config|

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box     = "debian-720-x32"
  config.vm.box_url = "http://puppet-vagrant-boxes.puppetlabs.com/debian-73-i386-virtualbox-puppet.box"

  # Configure networking
  config.vm.hostname = "themes.dev"
  config.vm.network :private_network, ip: "192.168.31.16"

  # Disabling the default /vagrant share
  config.vm.synced_folder ".", "/vagrant", disabled: true

  # Configure shared folders depending on OS and available plugins  
  if ((/cygwin|mswin|mingw|bccwin|wince|emx/ =~ RUBY_PLATFORM) != nil)
    print "detected, that you run vagrant on windows ...\n"
	if Vagrant.has_plugin?("vagrant-winnfsd")
      print "\tvagrant-winnfsd plugin found, using nfs\n"
      print "\tif this doesn´t work uninstall the plugin\n"
      config.vm.synced_folder "serverdata/", "/serverdata", type: "nfs"
      config.vm.synced_folder "project/", "/project", type: "nfs"
	else
      print "\tfalling back to smb share \n"
      print "\tmore speed possible with vagrant-winnfsd plugin\n"
      config.vm.synced_folder "serverdata/", "/serverdata", owner: "www-data", group:"www-data"
      config.vm.synced_folder "project/", "/project", owner: "www-data", group:"www-data"
    end
  else
	print "using nfs\n"
    config.vm.synced_folder "serverdata/", "/serverdata", type: "nfs"
    config.vm.synced_folder "project/", "/project", type: "nfs"
  end

  # Prepare some prerequisites
  config.vm.provision :shell, :path => "serverdata/provision/prepare.sh"

  # Puppet provisioning
  config.vm.provision :puppet do |puppet|
     puppet.manifests_path = "serverdata/provision/manifests"
     puppet.manifest_file  = "default.pp"
  end

  # Configure the guest
  config.vm.provision :shell, :path => "serverdata/provision/bootstrap.sh"

  # Configure guest parameters
  config.vm.provider "virtualbox" do |vm, override|
    vm.name = "themes.dev"
    vm.customize ["modifyvm", :id, "--memory",          "1024"]
    vm.customize ["modifyvm", :id, "--cpuexecutioncap",   "80"]
  end

  # Override parameters for vmware_fusion 
  config.vm.provider :vmware_fusion do |vm, override|
    override.vm.box     = "precise64_fusion"
    override.vm.box_url = "http://files.vagrantup.com/precise64_vmware.box"
    override.vm.network :private_network, ip: "192.168.35.16"
    vm.vmx["memsize"] = "1024"
  end

end
