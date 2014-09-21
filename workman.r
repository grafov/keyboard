t <- read.table("workman.dat", sep=":")
png("workman.png")
plot(t, las=2)
dev.off()
