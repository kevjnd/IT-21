Vagrant.configure("2") do |config|

  config.vm.define "ansible" do |ansible|
  ansible.vm.box = "generic/debian12"
  ansible.vm.network "public_network"
  ansible.vm.network "private_network", ip: "192.168.50.51", virtualbox__intnet: "ansible_lab"
  ansible.vm.hostname = "Ansible-Krobin"
  ansible.vm.synced_folder "./ansible_data", "/vagrant_data"
  ansible.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--memory", "2048"]
    vb.customize ["modifyvm", :id, "--cpus", "2"]
	vb.name = "Ansible-Krobin"
    end
  ansible.vm.provision "shell", inline: <<-SHELL
    apt-get update
    apt-get install -y git ansible
  SHELL
  end

  config.vm.define "debian" do |debian|
    debian.vm.box = "generic/debian12"
    debian.vm.network "private_network", ip: "192.168.50.52", virtualbox__intnet: "ansible_lab"
    debian.vm.hostname = "Debian-Krobin"
    debian.vm.provider :virtualbox do |vb|
      vb.name = "Debian-Krobin"
      vb.customize ["modifyvm", :id, "--memory", "2048"]
      vb.customize ["modifyvm", :id, "--cpus", "2"]
    end
    debian.vm.provision "shell", inline: <<-SHELL
      apt-get update
      apt-get install -y fish mc
    SHELL
  end

  config.vm.define "ubuntu" do |ubuntu|
    ubuntu.vm.box = "generic/ubuntu2304"
    ubuntu.vm.network "private_network", ip: "192.168.50.53", virtualbox__intnet: "ansible_lab"
    ubuntu.vm.hostname = "Ubuntu-Krobin"
    ubuntu.vm.provider :virtualbox do |vb|
      vb.name = "Ubuntu-Krobin"
      vb.customize ["modifyvm", :id, "--memory", "2048"]
      vb.customize ["modifyvm", :id, "--cpus", "2"]
    end
    ubuntu.vm.provision "shell", inline: <<-SHELL
      apt-get update
      apt-get install -y fish mc
    SHELL
  end

  config.vm.define "oracle" do |oracle|
  oracle.vm.box = "generic/oracle9"
  oracle.vm.network "private_network", ip: "192.168.50.54", virtualbox__intnet: "ansible_lab"
  oracle.vm.hostname = "Alma-Krobin"
  oracle.vm.provider :virtualbox do |vb|
    vb.name = "Alma-Krobin"
    vb.customize ["modifyvm", :id, "--memory", "2048"]
    vb.customize ["modifyvm", :id, "--cpus", "2"]
  end
  oracle.vm.provision "shell", inline: <<-SHELL
    sudo dnf install -y fish mc
  SHELL
end

end