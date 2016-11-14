<?php
1 git clone  https://github.com/generalbao/Git 从远处版本库下载


2 git pull <远程主机名> <远程分支名>:<本地分支名>
取回origin主机的next分支，与本地的master分支合并
git pull origin next:master

3 git pull == git fetch,然后git merge
  取回origin/next分支，再与当前分支合并
  git fetch origin
  git merge origin/next

4 git push -u origin master 把本地的版本上传到远处 -u Git不但会把本地的master分支内容推送的远程新的master分支，还会把本地的master分支和远程的master分支关联起来，在以后的推送或者拉取时就可以简化命令
//echo 'git,i comming';

?>
