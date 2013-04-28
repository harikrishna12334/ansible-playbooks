#!/bin/bash

#
# CrashPlan excludes its own logs (hardcoded)
#

logdir=/var/log/crashplan

[ -d $logdir ] || mkdir $logdir

rsync -a /opt/CrashPlan-install/log/ $logdir
