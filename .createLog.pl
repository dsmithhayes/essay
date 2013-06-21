#!/usr/bin/perl

use warnings;

opendir(RAW, ".raw/")
	or die "Error opening directory.";

my @rawMD = readdir(RAW);

open FILE, "+>", "posts.log"
	or die "Error opening 'posts.log' file.";

foreach $raw(@rawMD){
	unless(($raw eq ".") or ($raw eq "..")){
		print "Logging '".$raw.".html' to file.\n";
		print FILE $raw.".html\n";
	}
}
