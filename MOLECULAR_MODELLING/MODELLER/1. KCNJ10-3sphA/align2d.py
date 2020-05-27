from modeller import *

env = environ()
aln = alignment(env)
mdl = model(env, file='3sph', model_segment=('FIRST:A','LAST:A'))
aln.append_model(mdl, align_codes='3sphA', atom_files='3sph.pdb')
aln.append(file='KCNJ10.ali', align_codes='KCNJ10')
aln.align2d()
aln.write(file='KCNJ10-3sphA.ali', alignment_format='PIR')
aln.write(file='KCNJ10-3sphA.pap', alignment_format='PAP')
