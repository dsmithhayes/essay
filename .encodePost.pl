#!/usr/bin/perl

use warnings;

use Text::Markdown;
my $m = Text::Markdown->new(
	empty_element_suffix => '/>',
	tab_width => 4
);

opendir(RAW, "/var/www/essays/.raw/")
	or die "Error opening directory.";

my @rawMD = readdir(RAW);

foreach $raw(@rawMD){
	unless(($raw eq ".") || ($raw eq "..")){
		print "Encoding '".$raw."'\n";

		open my $md, "<", ".raw/".$raw;
		open HTML, "+>", ".html/".$raw.".html";
		
		my $mdData = do { local $/; <$md> };
		my $html = $m->markdown($mdData);
		print HTML $html;

		close $md;
		close HTML;
	}
}

closedir(RAW);
