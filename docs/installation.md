---
id: installation
title: Installation
sidebar_label: Installation
---

## Requirements

Aztlan only requires [Docker](https://www.docker.com/) and [Docker Compose](https://docs.docker.com/compose/) (version 1.23 or above). For OSX we recommend installing [Docker Sync](http://docker-sync.io/).

If you don't have Docker, access [Docker installation](https://docs.docker.com/install/) guide.

## Pre installation

### Docker
In order for the user to run the commands to raise the environment it must be in the docker group.

Listing user groups:

```bash
$ groups $USER
```

Add user to Docker group
```bash
$ sudo groupadd docker
$ sudo usermod -aG docker $USER
```

### Docker Sync
For OSX, Aztlan use [Docker Sync](http://docker-sync.io/) to improve file read and write performance.

You must run the synchronization command each time you start work in the environment to ensure that the volumes that integrate the application with the file system are synchronized.

```bash
$ project-docker-sync
```

## Installing

### Directory
Create a root directory for your project:

```bash
mkdir my_project && cd my_project
```

### Repository
The following command will download a latest version of the Aztlan environment on `my_project` directory:

```bash
wget -qO- http://github.com/aztecweb/aztlan/archive/master.tar.gz | tar -xzf - --strip-components 1
```

### Install
Run only one command to install your environment:

```bash
$ ./environment/bin/install
```

If you need change the default installation settings, see [configuration page](configuration.md#installenv).

## Profile
Aztlan has a collection of alias to make environment management easier and faster. Load environment profile to your current shell:

```bash
$ source /environment/profile
```
Since the profile is based on the current terminal context, every time that a new terminal is opened to work on the project, it is necessary to load the profile.

[Click here](commands.md) to see the list of all commands.

## Running
Now with the profile loaded just run the command below to start the server, your Aztlan environment will be running on [localhost](http://localhost/):

```bash
$ server
```

And run `down` to stop all started containers.

## Restart installation
If for any reason you have to get a clean installation, just remove all gitignored files and reset your database data. 

For this step you must have Git installed.

### Reseting your database
Clears all WordPress data to allow a fresh install.

```bash
$ wp db reset --yes
```

### Removing gitignored files
This command will remove all files that are not versioned by Git. Be very careful not to lose any important files.

```bash
$ git clean -xdf
```
