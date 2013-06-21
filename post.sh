#!/bin/bash

perl .writePost.pl
perl .createLog.pl
perl .encodePost.pl

echo "Successfully posted!"
