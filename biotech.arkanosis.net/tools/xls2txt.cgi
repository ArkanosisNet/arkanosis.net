#! /usr/bin/env python
# -*- coding: utf-8 -*-

import itertools
import sys
import xlrd

_maxNbRows = 8
_maxNbCols = 12

def convert(xlsFileName, txtFileName):
	_convert(xlrd.open_workbook(xlsFileName))

def _convert(xlsFile, txtFileName):
	plaqueSheet = xlsFile.sheet_by_name('Plaque')
	print '<pre>'
	with open(txtFileName, 'w') as txtFile:
		for x, y in itertools.product(xrange(_maxNbCols), xrange(_maxNbRows)):
			rowId = 3 * y + 3
			if rowId >= plaqueSheet.nrows:
				break
			colId = 3 * x + 2
			if colId >= plaqueSheet.ncols:
				continue
			genCell = plaqueSheet.cell(rowId, colId)
			if genCell.ctype != xlrd.XL_CELL_EMPTY:
				locCell = plaqueSheet.cell(rowId + 1, colId)
				if '-' in genCell.value:
					genChrom, direction = genCell.value.split('-')
					gen, chrom = genChrom.split(' ')
					while len(gen) < 4:
						gen += '_'
					while len(chrom) < 4:
						chrom += '_'
					#txtFile.write('%s_%s_%s_%s\n' % (gen, chrom, locCell.value.replace('-', '_'), direction))
						print '%s_%s_%s_%s' % (gen, chrom, locCell.value.replace('-', '_'), direction)
	print 'CONTROL__________APPLIED'
	print '</pre>'

if __name__ == '__main__':
	if len(sys.argv) != 3:
		import cgi
		import cgitb
		print "Content-type: text/html\n\n"
		form = cgi.FieldStorage()
		_convert(xlrd.open_workbook(file_contents=form['f'].file.read()), 'foo.txt')
		sys.exit(0)
#		print 'Usage: xls2txt.py <input.xls> <output.txt>'
#		sys.exit(1)

	convert(sys.argv[1], sys.argv[2])
