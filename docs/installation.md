---
id: installation
title: Installation
sidebar_label: Installation
---

Aztlan was designed from the ground up to be easily installed and used to get your **WordPress** theme up and running quickly on **Docker**.

<center>**WordPress ❤ Docker**</center>

## Requirements

Aztlan only requires [Docker](https://www.docker.com/) and [Docker Compose](https://docs.docker.com/compose/). For OSX we recommend installing [Docker Sync](http://docker-sync.io/).

## Installing

### Directory
Create a root directory for your project:

```bash
mkdir my_project && cd my_project
```

### Repository
The following command will download a latest version of the Aztlan environment on `my_project` directory:

```bash
git archive --format=tar --remote=git@greatcode.aztecweb.net:aztecwebteam/ambiente.git HEAD | tar xf -v
```

### Installl
Run only one command to install your environment:

```bash
$ ./environment/bin/install
```

## Profile
Aztlan has a collection of alias to make environment management easier and faster. Load environment profile to your current shell:

```bash
$ source /environment/profile
```

[Click here](commands.md) to see the list of all commands.

## Running
Now with the profile loaded just run the command below to start the server:

```bash
$ server
```

And run `down` to stop all started containers.
