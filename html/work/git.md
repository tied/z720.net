/*
Title: Git/GitHub cheatsheet
Template: page
Sources: http://durdn.com/blog/2012/11/22/must-have-git-aliases-advanced-examples/, http://haacked.com/archive/2014/07/28/github-flow-aliases/
*/
# Git
##Alias
    # Pretty log
    lg = log --graph --pretty=tformat:'%Cred%h%Creset -%C(auto)%d%Creset %s %Cgreen(%an %ar)%Creset'
    # Shortcuts
    st = status
    ci = commit
    co = checkout
    #Update from remote with rebase and clean useless tracking branch
    up = !git pull --rebase --prune $@ && git submodule update --init --recursive
    # Start a new branch
    cob = checkout -b
    # Add all
    aa = add --all
    # Amend 
    oops = commit --amend --no-edit

## Usefull commands
* View history with graph: `git log --oneline --abbrev-commit --all --graph --decorate`
* Package project: `git archive --format zip -o sources.zip branch/tag/HEAD`

## Workflow
* [Create your own Git cheatsheet (according to your workflow)](http://24ways.org/2013/git-for-grownups/)
* [Bien utiliser git-merge et git-rebase](http://www.git-attitude.fr/2014/05/04/bien-utiliser-git-merge-et-rebase/)
* [Résoudre les conflits une fois pour toutes (Control Merge + Git rerere)](https://medium.com/@porteneuve/fix-conflicts-only-once-with-git-rerere-7d116b2cec67)

## Configuration
* [Configuration GIT "aux petits oignons"](http://www.git-attitude.fr/2013/04/03/configuration-git/) - [GIST](https://gist.github.com/tdd/470582#file-config-git-globale-qui-va-bien)

# GitHub
## Fork
* [Fork a Repo](https://help.github.com/articles/fork-a-repo):
* [Syncing a Fork](https://help.github.com/articles/syncing-a-fork):
  1. `git fetch upstream` (Upstream is the source to sync your fork with)
  2. `git checkout master` (or any tracking branch to sync)
  3. `git merge upstream/master`
* [How to reset your GitHub Fork](http://scribu.net/blog/resetting-your-github-fork.html)
  1. `git remote add upstream git://github.com/fork/repo`
  2. `git fetch upstream`
  3. `git branch backup`
  4. `git checkout upstream/master -B master`
  5. `git push --force`
